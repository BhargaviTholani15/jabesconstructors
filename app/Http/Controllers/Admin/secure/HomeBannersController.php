<?php

namespace App\Http\Controllers\Admin\secure;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeBannersController extends Controller
{
    public function index()
    {
        $data = DB::table('home_banners')->where('active_flag', '1')->orderByDesc('created_at')->get();
        return view('admin.banners.homeimages', ['data' => $data]);
    }

    public function add(?string $id = null)
    {
        if ($id != null) {
            $data = DB::table('home_banners')->where('id', $id)->first();
            return view('admin.banners.addhomeimage', ['data' => $data]);
        }
        return view('admin.banners.addhomeimage');
    }

    public function save(Request $request, ?string $id = null)
    {
        if ($id == null) {
            $request->validate([
                'title' => 'required',
                'image' => 'required',
            ]);
        } else {
            $request->validate([
                'title' => 'required',
            ]);
        }

        $data = [
            'title' => $request->input('title'),
            'description' => $request->input('description'),
        ];

        $file = $request->file('image');
        if ($file != null && $file->isValid()) {
            $dir = date('Y/m/d');
            $fileName = time() . '_' . preg_replace('/[^A-Za-z0-9._-]/', '-', $file->getClientOriginalName());
            $file->storeAs($dir, $fileName, 'public_uploads');
            $data['image_path'] = $dir . '/' . $fileName;
        }

        if ($id != null) {
            DB::table('home_banners')->where('id', $id)->update($data);
            return redirect('_admin/secure/homeimages')->with('success', 'Banner updated successfully');
        } else {
            $data['created_at'] = Carbon::now();
            DB::table('home_banners')->insert($data);
            return redirect('_admin/secure/homeimages')->with('success', 'New banner added successfully');
        }
    }

    public function delete($id)
    {
        DB::table('home_banners')->where('id', $id)->update(['active_flag' => '0']);
        return redirect('_admin/secure/homeimages')->with('success', 'Banner deleted');
    }
}
