<?php

namespace App\Http\Controllers\Admin\secure;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SettingsController extends Controller
{
    public function index()
    {
        $settings = DB::table('settings')->pluck('value', 'key')->toArray();
        return view('admin.settings', ['settings' => $settings]);
    }

    public function save(Request $request)
    {
        $keys = [
            'company_name', 'address', 'office_phone', 'cell_phone', 'email',
            'working_hours', 'facebook', 'instagram', 'linkedin', 'youtube',
            'twitter', 'whatsapp', 'footer_text', 'copyright'
        ];

        foreach ($keys as $key) {
            DB::table('settings')->updateOrInsert(
                ['key' => $key],
                ['value' => $request->input($key, ''), 'updated_at' => now()]
            );
        }

        // Handle portfolio PDF upload
        if ($request->hasFile('portfolio_pdf')) {
            $file = $request->file('portfolio_pdf');
            $dir = date('Y/m/d');
            $fileName = time() . '_' . preg_replace('/[^A-Za-z0-9._-]/', '-', $file->getClientOriginalName());
            $file->storeAs($dir, $fileName, 'public_uploads');
            DB::table('settings')->updateOrInsert(
                ['key' => 'portfolio_pdf'],
                ['value' => $dir . '/' . $fileName, 'updated_at' => now()]
            );
        }

        return back()->with('success', 'Settings updated successfully');
    }
}
