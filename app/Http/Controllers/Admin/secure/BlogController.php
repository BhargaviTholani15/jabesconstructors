<?php

namespace App\Http\Controllers\Admin\secure;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function index()
    {
        $data = DB::table('blogs')->where('active_flag', '1')->orderByDesc('created_at')->get();
        $categories = DB::table('blog_categories')->where('active_flag', 1)->get();
        return view('admin.blogs.blogs', ['data' => $data, 'categories' => $categories]);
    }

    public function add()
    {
        $categories = DB::table('blog_categories')->where('active_flag', 1)->get();
        return view('admin.blogs.addblog', ['categories' => $categories]);
    }

    public function save(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required',
            'summary' => 'required',
            'long_description' => 'required',
        ]);

        $file = $request->image;
        $file_path = '';
        if ($file != null && $file->isValid()) {
            $dir = date('Y/m/d');
            $fileName = time() . '_' . preg_replace('/[^A-Za-z0-9._-]/', '-', $file->getClientOriginalName());
            $file->storeAs($dir, $fileName, 'public_uploads');
            $file_path = $dir . '/' . $fileName;
        }

        $data = [
            'blog_title' => $request->input('title'),
            'blog_image' => $file_path,
            'blog_summery' => $request->input('summary'),
            'author' => $request->input('author'),
            'blog_description' => $request->input('long_description'),
            'category_ids' => $request->input('category_ids') ? json_encode($request->input('category_ids')) : null,
            'published_at' => $request->input('published_at') ?? now(),
            'minutes_to_read' => $request->input('minutes_to_read'),
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

        DB::table('blogs')->insert($data);
        return redirect('_admin/secure/blog')->with('success', 'New Blog Inserted');
    }

    public function edit($id)
    {
        $data = DB::table('blogs')->where('id', $id)->first();
        $categories = DB::table('blog_categories')->where('active_flag', 1)->get();
        return view('admin.blogs.editblog', ['data' => $data, 'categories' => $categories]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'summary' => 'required',
            'long_description' => 'required',
        ]);

        $existing = DB::table('blogs')->where('id', $id)->first();

        $file = $request->image;
        if ($file != null && $file->isValid()) {
            $dir = date('Y/m/d');
            $fileName = time() . '_' . preg_replace('/[^A-Za-z0-9._-]/', '-', $file->getClientOriginalName());
            $file->storeAs($dir, $fileName, 'public_uploads');
            $file_path = $dir . '/' . $fileName;
        } else {
            $file_path = $existing->blog_image;
        }

        $data = [
            'blog_title' => $request->input('title'),
            'blog_image' => $file_path,
            'blog_summery' => $request->input('summary'),
            'author' => $request->input('author'),
            'blog_description' => $request->input('long_description'),
            'category_ids' => $request->input('category_ids') ? json_encode($request->input('category_ids')) : $existing->category_ids,
            'published_at' => $request->input('published_at') ?? $existing->published_at,
            'minutes_to_read' => $request->input('minutes_to_read'),
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

        DB::table('blogs')->where('id', $id)->update($data);
        return redirect('_admin/secure/blog')->with('success', 'Blog Updated');
    }

    public function delete($id)
    {
        DB::table('blogs')->where('id', $id)->update(['active_flag' => '0']);
        return redirect('_admin/secure/blog')->with('success', 'Record Deleted');
    }
}
