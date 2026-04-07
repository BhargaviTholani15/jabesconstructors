<?php

namespace App\Http\Controllers\Admin\secure;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class BlogCommentController extends Controller
{
    public function index()
    {
        $data = DB::table('blog_comments')
            ->leftJoin('blogs', 'blog_comments.blog_id', '=', 'blogs.id')
            ->where('blog_comments.active_flag', 1)
            ->select('blog_comments.*', 'blogs.blog_title')
            ->orderByDesc('blog_comments.created_at')
            ->get();
        return view('admin.blogs.comments', ['data' => $data]);
    }

    public function delete($id)
    {
        DB::table('blog_comments')->where('id', $id)->delete();
        return redirect('_admin/secure/blog-comments')->with('success', 'Comment deleted');
    }
}
