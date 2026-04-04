<?php

namespace App\Http\Controllers\Admin\secure;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class SeoController extends Controller
{
    public function seoList(Request $request)
    {
        $page = $request->input('page');
        if (empty($page) || $page < 1) {
            $page = 1;
        }
        $limit = 10;
        $offset = ($page - 1) * $limit;

        $sqlQuery = DB::table('seo');
        $search = $request->input('search');
        if (!empty($search)) {
            $sqlQuery = $sqlQuery->whereLike('url', "%$search%");
        }

        $seoList = $sqlQuery->skip($offset)
            ->limit($limit)
            ->orderBy("url")
            ->get();

        return view('admin/seo/index', [
            'digital' => $seoList,
            'page' => $page,
            'search' => $search
        ]);
    }

    public function addseoList(?string $id = null)
    {
        if ($id != null) {
            $row = DB::table('seo')
                ->where('seo_id', $id)
                ->first();
            return view('admin/seo/save', ['row' => $row]);
        }
        return view('admin/seo/save');
    }
    public function saveList(Request $request, ?string $id = null)
    {
        $data = [
            "url" => ltrim($request->input('URL'), '/'),
            "title" => $request->input('title'),
            "description" => $request->input('description'),
            "keywords" => $request->input('keywords'),
            "meta" => $request->input('meta'),
            "schema" => $request->input('schema'),
            "gtag_head" => $request->input('gtag_head'),
            "gtag_body" => $request->input('gtag_body'),
            "created_at" => Carbon::now()

        ];
        if ($id != null) {

            $action = DB::table('seo')
                ->where("seo_id", $id)
                ->update($data);
        } else {
            $action = DB::table('seo')->insert($data);
        }

        return redirect('/_admin/secure/seo');
    }
    public function delList(?string $id)
    {
        $delete = DB::table('seo')
            ->where("seo_id", $id)
            ->delete();
        return redirect('/_admin/secure/seo');
    }
}
