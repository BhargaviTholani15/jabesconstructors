<?php

namespace App\Http\Controllers\Admin\secure;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class TeamController extends Controller
{
    public function index()
    {
        $data = DB::table('team_members')->where('active_flag', 1)->orderBy('order_no')->orderByDesc('created_at')->get();
        return view('admin.team.index', ['data' => $data]);
    }

    public function add(?string $id = null)
    {
        if ($id) {
            $data = DB::table('team_members')->where('id', $id)->first();
            return view('admin.team.save', ['data' => $data]);
        }
        return view('admin.team.save');
    }

    public function save(Request $request, ?string $id = null)
    {
        $request->validate(['name' => 'required']);

        $data = [
            'name' => $request->input('name'),
            'designation' => $request->input('designation'),
            'facebook' => $request->input('facebook'),
            'instagram' => $request->input('instagram'),
            'linkedin' => $request->input('linkedin'),
            'twitter' => $request->input('twitter'),
            'order_no' => $request->input('order_no'),
            'updated_at' => Carbon::now(),
        ];

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $dir = date('Y/m/d');
            $fileName = time() . '_' . preg_replace('/[^A-Za-z0-9._-]/', '-', $file->getClientOriginalName());
            $file->storeAs($dir, $fileName, 'public_uploads');
            $data['image_path'] = $dir . '/' . $fileName;
        }

        if ($id) {
            DB::table('team_members')->where('id', $id)->update($data);
        } else {
            $data['created_at'] = Carbon::now();
            DB::table('team_members')->insert($data);
        }
        return redirect('_admin/secure/team')->with('success', 'Team member saved');
    }

    public function delete($id)
    {
        DB::table('team_members')->where('id', $id)->update(['active_flag' => 0]);
        return redirect('_admin/secure/team')->with('success', 'Deleted');
    }
}
