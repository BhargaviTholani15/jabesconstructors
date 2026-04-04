<?php

namespace App\Http\Controllers\Admin\secure;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class ProjectCategoryController extends Controller
{
    public function index()
    {
        $data = DB::table('project_categories')
            ->where('active_flag', 1)
            ->orderBy('order_no')
            ->orderByDesc('created_at')
            ->get();

        foreach ($data as $cat) {
            $cat->project_count = DB::table('projects')
                ->where('category_id', $cat->id)
                ->where('active_flag', 1)
                ->count();
        }

        return view('admin/projects/categories', ['data' => $data]);
    }

    public function add(?string $id = null)
    {
        if ($id != null) {
            $data = DB::table('project_categories')->where('id', $id)->first();
            return view('admin/projects/category-save', ['data' => $data]);
        }
        return view('admin/projects/category-save');
    }

    public function save(Request $request, ?string $id = null)
    {
        $request->validate(['name' => 'required']);

        $data = [
            'name' => $request->input('name'),
            'order_no' => $request->input('order_no'),
            'updated_at' => Carbon::now(),
        ];

        if ($id != null) {
            DB::table('project_categories')->where('id', $id)->update($data);
        } else {
            $data['created_at'] = Carbon::now();
            DB::table('project_categories')->insert($data);
        }

        return redirect('_admin/secure/project-categories')->with('success', 'Category saved successfully');
    }

    public function delete($id)
    {
        DB::table('project_categories')->where('id', $id)->update(['active_flag' => 0]);
        return redirect('_admin/secure/project-categories')->with('success', 'Category deleted');
    }
}
