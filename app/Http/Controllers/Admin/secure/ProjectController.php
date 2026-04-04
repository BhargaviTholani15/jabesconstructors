<?php

namespace App\Http\Controllers\Admin\secure;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public function index()
    {
        $data = DB::table('services')
            ->where("active_flag", 1)
            ->where("type", "project")
            ->orderByDesc("created_at")
            ->get();
        return view('admin/projects/index', ['data' => $data]);
    }

    public function add(?string $id = null)
    {
        if ($id != null) {
            $data = DB::table('services')
                ->where('id', $id)
                ->first();
            return view('admin/projects/save', ['data' => $data]);
        }
        return view('admin/projects/save');
    }

    public function save(Request $request, ?string $id = null)
    {
        if ($id == null) {
            $validatedata = $request->validate([
                'service_title' => 'required',
                'service_image' => 'required',
                'service_summary' => 'required',
                'service_description' => 'required',
            ]);
        }

        $data = [
            'service_title' => $request->input('service_title'),
            'service_summary' => $request->input('service_summary'),
            'service_description' => $request->input('service_description'),
            'created_at' => Carbon::now(),
            'created_by' => auth()->user()->name,
            'updated_at' => Carbon::now(),
            'type' => 'project'
        ];
        if ($data['service_title'] != null) {
            $url = preg_replace('/[^A-Za-z0-9\-]/', ' ', $data['service_title']);
            $data['slug'] = strtolower(preg_replace('!\s+!', '-', trim($url)));
        }
        $file = $request->service_image;
        if ($file != null && $file->isValid()) {
            $dir = date('Y/m/d');
            $fileName = time() . '_' . preg_replace('/[^A-Za-z0-9._-]/', '-', $file->getClientOriginalName());
            $file->storeAs($dir, $fileName, 'public_uploads');
            $data['service_image'] = $dir . '/' . $fileName;
        }
        $file = $request->inner_image;
        if ($file != null && $file->isValid()) {
            $dir = date('Y/m/d');
            $fileName = time() . '_' . preg_replace('/[^A-Za-z0-9._-]/', '-', $file->getClientOriginalName());
            $file->storeAs($dir, $fileName, 'public_uploads');
            $data['inner_image'] = $dir . '/' . $fileName;
        }
        if ($id != null) {
            $result = DB::table('services')
                ->where('id', $id)
                ->update($data);
        } else {
            $result = DB::table('services')->insert($data);
        }

        if ($result) {
            return redirect('_admin/secure/projects')->with('success', 'Project saved successfully');
        }
        return back()->withInput()->with('error', 'Please try again');
    }

    public function delete($id)
    {
        $result = DB::table('services')->where('id', $id)->update(['active_flag' => '0']);
        if ($result) {
            return redirect('_admin/secure/projects')->with('success', 'Record Deleted');
        }
        return back()->withInput()->with('error', 'Please try again');
    }
}
