<?php

namespace App\Http\Controllers\Admin\secure;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class ClientLogoController extends Controller
{
    public function index()
    {
        $data = DB::table('client_logos')
            ->where('active_flag', 1)
            ->orderBy('order_no')
            ->orderByDesc('created_at')
            ->get();
        return view('admin.clients.index', ['data' => $data]);
    }

    public function add(?string $id = null)
    {
        if ($id != null) {
            $data = DB::table('client_logos')->where('id', $id)->first();
            return view('admin.clients.save', ['data' => $data]);
        }
        return view('admin.clients.save');
    }

    public function save(Request $request, ?string $id = null)
    {
        $request->validate(['name' => 'required']);

        if ($id == null && !$request->hasFile('image')) {
            return back()->withInput()->withErrors(['image' => 'Logo image is required']);
        }

        $data = [
            'name' => $request->input('name'),
            'website_url' => $request->input('website_url'),
            'order_no' => $request->input('order_no'),
        ];

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $dir = date('Y/m/d');
            $fileName = time() . '_' . preg_replace('/[^A-Za-z0-9._-]/', '-', $file->getClientOriginalName());
            $file->storeAs($dir, $fileName, 'public_uploads');
            $data['image_path'] = $dir . '/' . $fileName;
        }

        if ($id != null) {
            DB::table('client_logos')->where('id', $id)->update($data);
            return redirect('_admin/secure/client-logos')->with('success', 'Client logo updated');
        } else {
            $data['created_at'] = Carbon::now();
            DB::table('client_logos')->insert($data);
            return redirect('_admin/secure/client-logos')->with('success', 'Client logo added');
        }
    }

    public function delete($id)
    {
        DB::table('client_logos')->where('id', $id)->update(['active_flag' => 0]);
        return redirect('_admin/secure/client-logos')->with('success', 'Record deleted');
    }
}
