<?php

namespace App\Http\Controllers\Admin\secure;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDO;

class BlogController extends Controller
{
    public function index()
    {
        $data = DB::table('blogs')
            ->where('active_flag', '1')
            ->orderByDesc("created_at")
            ->get();
        if ($data) {
            return view('admin.blogs.blogs', ['data' => $data]);
        }
        return redirect()->back()->withErrors(['message' => 'No data Found']);
    }

    public function add()
    {
        return view('admin.blogs.addblog');
    }

    public function save(Request $request)
    {
        $validatedata = $request->validate([
            'title' => 'required',
            'image' => 'required',
            'summary' => 'required',
            'long_description' => 'required',
        ]);
        if (!$validatedata) {
            return redirect()->back()->withErrors(['message' => 'Plese Try again']);
        }

        $file = $request->image;
        if ($file != null && $file->isValid()) {
            $dir = date('Y/m/d');
            $fileName = time() . '_' . preg_replace('/[^A-Za-z0-9._-]/', '-', $file->getClientOriginalName());
            $move = $file->storeAs($dir, $fileName, 'public_uploads');
            $file_path = $dir . '/' . $fileName;
        }
        $data = [
            'blog_title' => $request->input('title'),
            'blog_image' => $file_path,
            'blog_summery' => $request->input('summary'),
            'author' => $request->input('author'),
            'blog_description' => $request->input('long_description'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        $innerFile = $request->inner_image;
        if ($innerFile != null && $innerFile->isValid()) {
            $dir = date('Y/m/d');
            $fileName = time() . '_inner_' . preg_replace('/[^A-Za-z0-9._-]/', '-', $innerFile->getClientOriginalName());
            $innerFile->storeAs($dir, $fileName, 'public_uploads');
            $data['inner_image'] = $dir . '/' . $fileName;
        }
        if ($data['blog_title'] != null) {
            $url = preg_replace('/[^A-Za-z0-9\-]/', ' ', $data['blog_title']);
            $data['slug'] = strtolower(preg_replace('!\s+!', '-', trim($url)));
        }
        $result = DB::table('blogs')->insert($data);
        if ($result) {
            return redirect('_admin/secure/blog')->with('success', 'New Blog Inserted');
        }
        return back()->withInput()->with('error', 'Plese try Again');
    }


    public function edit($id)
    {

        $data = DB::table('blogs')->where('id', $id)->first();

        return view('admin.blogs.editblog', ['data' => $data]);
    }

    public function update(Request $request, $id)
    {
        $validatedata = $request->validate([
            'title' => 'required',

            'summary' => 'required',
            'long_description' => 'required',
        ]);
        if (!$validatedata) {
            return redirect()->back()->withErrors(['message' => 'Plese Try again']);
        }

        $data = DB::table('blogs')->where('id', $id)->first();

        $file = $request->image;


        if ($file != null && $file->isValid()) {
            $dir = date('Y/m/d');
            $fileName = time() . '_' . preg_replace('/[^A-Za-z0-9._-]/', '-', $file->getClientOriginalName());
            $move = $file->storeAs($dir, $fileName, 'public_uploads');
            $file_path = $dir . '/' . $fileName;
        } else {
            $file_path = $data->blog_image;
        }
        $data = [
            'blog_title' => $request->input('title'),
            'blog_image' => $file_path,
            'blog_summery' => $request->input('summary'),
            'author' => $request->input('author'),
            'blog_description' => $request->input('long_description'),
            'updated_at' => Carbon::now(),
        ];
        $innerFile = $request->inner_image;
        if ($innerFile != null && $innerFile->isValid()) {
            $dir = date('Y/m/d');
            $fileName = time() . '_inner_' . preg_replace('/[^A-Za-z0-9._-]/', '-', $innerFile->getClientOriginalName());
            $innerFile->storeAs($dir, $fileName, 'public_uploads');
            $data['inner_image'] = $dir . '/' . $fileName;
        }
        if ($data['blog_title'] != null) {
            $url = preg_replace('/[^A-Za-z0-9\-]/', ' ', $data['blog_title']);
            $data['slug'] = strtolower(preg_replace('!\s+!', '-', trim($url)));
        }
        $result = DB::table('blogs')->where('id', $id)->update($data);
        if ($result) {
            return redirect('_admin/secure/blog')->with('success', 'Record Updated');
        }
        return back()->withInput()->with('error', 'Plese try Again');
    }

    public function delete($id)
    {
        $result = DB::table('blogs')->where('id', $id)->update(['active_flag' => '0']);
        if ($result) {
            return redirect('_admin/secure/blog')->with('success', 'Record Deleted');
        }
        return back()->withInput()->with('error', 'Plese try Again');
    }
}
