<?php

namespace App\Http\Controllers\Admin\secure;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VideoController extends Controller
{
    public function index()
    {
        $data = DB::table('gallery')
            ->where('active_flag', '1')
            ->whereIn('type', ['VIDEO', 'VIDEO_URL', 'VIDEO_SLIDESHOW'])
            ->orderByDesc('created_at')
            ->get();
        return view('admin.gallery.videos', ['data' => $data]);
    }

    public function add()
    {
        return view('admin.gallery.addvideo');
    }

    public function save(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'video_type' => 'required|in:VIDEO,VIDEO_URL,VIDEO_SLIDESHOW',
        ]);

        $videoType = $request->input('video_type');

        $data = [
            'image_title' => $request->input('title'),
            'type' => $videoType,
            'created_at' => Carbon::now(),
        ];

        if ($videoType === 'VIDEO') {
            $request->validate(['video_file' => 'required|file']);
            $file = $request->file('video_file');
            $dir = date('Y/m/d');
            $fileName = time() . '_' . preg_replace('/[^A-Za-z0-9._-]/', '-', $file->getClientOriginalName());
            $file->storeAs($dir, $fileName, 'public_uploads');
            $data['video_path'] = $dir . '/' . $fileName;
        }

        if ($videoType === 'VIDEO_URL') {
            $request->validate(['video_url' => 'required|url']);
            $data['video_url'] = $request->input('video_url');
        }

        if ($videoType === 'VIDEO_SLIDESHOW') {
            $request->validate(['slideshow_images' => 'required|array|min:2']);
            $paths = [];
            foreach ($request->file('slideshow_images') as $file) {
                $dir = date('Y/m/d');
                $fileName = time() . '_' . rand(100, 999) . '_' . preg_replace('/[^A-Za-z0-9._-]/', '-', $file->getClientOriginalName());
                $file->storeAs($dir, $fileName, 'public_uploads');
                $paths[] = $dir . '/' . $fileName;
            }
            $data['slideshow_images'] = json_encode($paths);
        }

        $result = DB::table('gallery')->insert($data);
        if ($result) {
            return redirect('_admin/secure/videos')->with('success', 'New Record Inserted');
        }
        return back()->withInput()->with('error', 'Please try again');
    }

    public function delete($id)
    {
        $result = DB::table('gallery')->where('id', $id)->update(['active_flag' => '0']);
        if ($result) {
            return redirect('_admin/secure/videos')->with('success', 'Record Deleted');
        }
        return back()->withInput()->with('error', 'Please try again');
    }
}
