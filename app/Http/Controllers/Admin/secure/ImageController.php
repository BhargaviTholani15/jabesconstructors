<?php

namespace App\Http\Controllers\Admin\secure;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImageController extends Controller
{
    public function index()
    {
        $data = DB::table('gallery')
            ->where('active_flag', '1')
            ->where('type', 'IMAGE')
            ->orderByDesc("created_at")
            ->get();

        if ($data) {
            return view('admin.gallery.images', ['data' => $data]);
        }
        return redirect()->back()->withErrors(['message' => 'No data Found']);
    }

    public function add()
    {
        return view('admin.gallery.addimage');
    }

    public function save(Request $request)
    {
        $validatedata = $request->validate([
            'title' => 'required',
            'image' => 'required|max:10240',
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
            'image_title' => $request->input('title'),
            'image_path' => $file_path,
            'type' => 'IMAGE',
            'created_at' => Carbon::now(),
        ];
        $result = DB::table('gallery')->insert($data);
        if ($result) {
            return redirect('_admin/secure/images')->with('success', 'New Record Inserted');
        }
        return back()->withInput()->with('error', 'Plese try Again');
    }

    public function delete($id)
    {

        $result = DB::table('gallery')->where('id', $id)->update(['active_flag' => '0']);
        if ($result) {
            return redirect('_admin/secure/images')->with('success', ' Record Deleted');
        }
        return back()->withInput()->with('error', 'Plese try Again');
    }
}
