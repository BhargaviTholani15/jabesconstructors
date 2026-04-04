<?php

namespace App\Http\Controllers\Admin\secure;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class FaqController extends Controller
{
    public function index()
    {
        $data = DB::table('faqs')
            ->where("active_flag", 1)
            ->orderByDesc("created_at")
            ->get();
        return view('admin/faqs/index', ['data' => $data]);
    }

    public function add(?string $id = null)
    {
        if ($id != null) {
            $data = DB::table('faqs')
                ->where('id', $id)
                ->first();
            return view('admin/faqs/save', ['data' => $data]);
        }
        return view('admin/faqs/save');
    }

    public function save(Request $request, ?string $id = null)
    {
        if ($id == null) {
            $request->validate([
                'question' => 'required',
                'answer' => 'required',
            ]);
        }

        $data = [
            'question' => $request->input('question'),
            'answer' => $request->input('answer'),
            'updated_at' => Carbon::now(),
        ];

        if ($id != null) {
            DB::table('faqs')->where('id', $id)->update($data);
        } else {
            $data['created_at'] = Carbon::now();
            DB::table('faqs')->insert($data);
        }

        return redirect('_admin/secure/faqs')->with('success', 'FAQ saved successfully');
    }

    public function delete($id)
    {
        DB::table('faqs')->where('id', $id)->update(['active_flag' => 0]);
        return redirect('_admin/secure/faqs')->with('success', 'Record Deleted');
    }
}
