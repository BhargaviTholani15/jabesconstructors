<?php

namespace App\Http\Controllers\Admin\secure;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogCategoryController extends Controller
{
    public function index()
    {
        $data = DB::table('blog_categories')->where('active_flag', 1)->orderByDesc('created_at')->get();
        return view('admin.blogs.categories', ['data' => $data]);
    }

    public function save(Request $request, ?string $id = null)
    {
        $request->validate(['category' => 'required']);

        if ($id) {
            DB::table('blog_categories')->where('id', $id)->update(['category' => $request->input('category')]);
        } else {
            DB::table('blog_categories')->insert(['category' => $request->input('category'), 'created_at' => now()]);
        }
        return redirect('_admin/secure/blog-categories')->with('success', 'Category saved');
    }

    public function delete($id)
    {
        DB::table('blog_categories')->where('id', $id)->update(['active_flag' => 0]);
        return redirect('_admin/secure/blog-categories')->with('success', 'Deleted');
    }
}
