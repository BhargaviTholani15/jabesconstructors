<?php

namespace App\Http\Controllers\Admin\secure;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class DoctorsController extends Controller
{
    public function index()
    {
        $data = DB::table('doctors')
            ->orderByDesc("created_at")
            ->get();
        if ($data) {
            return view('admin/doctors/index', ['data' => $data]);
        }
        return redirect()->back()->withErrors(['message' => 'No data Found']);
    }

    public function add(?string $id = null)
    {
        if ($id != null) {
            $data = DB::table('doctors')
                ->where('id', $id)
                ->first();
            return view('admin/doctors/save', ['data' => $data]);
        }
        return view('admin/doctors/save');
    }
    public function save(Request $request, ?string $id = null)
    {
        if ($id == null) {
            $validatedata = $request->validate([
                'name' => 'required',
            ]);
            if (!$validatedata) {
                return redirect()->back()->withErrors(['message' => 'Plese Try again']);
            }
        }

        $data = [
            'name' => $request->input('name'),
            'degree' => $request->input('degree'),
            'department' => $request->input('department'),
            'updated_at' => Carbon::now(),
        ];
        $file = $request->image_path;
        if ($file != null && $file->isValid()) {
            $dir = date('Y/m/d');
            $fileName = time() . '_' . preg_replace('/[^A-Za-z0-9._-]/', '-', $file->getClientOriginalName());
            $move = $file->storeAs($dir, $fileName, 'public_uploads');
            $data['image_path'] = $dir . '/' . $fileName;
        }
        if ($id != null) {
            $result = DB::table('doctors')
                ->where('id', $id)
                ->update($data);
        } else {
            $data['created_at'] = Carbon::now();
            $result = DB::table('doctors')->insert($data);
        }

        if ($result) {
            return redirect('_admin/secure/doctors')->with('success', 'New doctors Inserted');
        }
        return back()->withInput()->with('error', 'Plese try Again');
    }

    public function delete($id)
    {
        $result = DB::table('doctors')->where('id', $id)->update(['active_flag' => '0']);
        if ($result) {
            return redirect('_admin/secure/doctors')->with('success', 'Record Deleted');
        }
        return back()->withInput()->with('error', 'Plese try Again');
    }
    public function statusUpdate($id, $status)
    {
        $status = 1 ? 0 : 1;
        $result = DB::table('doctors')->where('id', $id)->update([
            'active_flag' => $status,
            "updated_at" => Carbon::now()
        ]);
        if ($result) {
            return redirect('_admin/secure/doctors')->with('success', 'Record Deleted');
        }
        return back()->withInput()->with('error', 'Plese try Again');
    }
    public function orderNo(Request $request, $id)
    {
        $order_no = $request->input("order_no");
        $result = DB::table('doctors')->where('id', $id)->update([
            'order_no' => $order_no,
            "updated_at" => Carbon::now()
        ]);
        if ($result) {
            return redirect('_admin/secure/doctors')->with('success', 'Record Deleted');
        }
        return back()->withInput()->with('error', 'Plese try Again');
    }
}
