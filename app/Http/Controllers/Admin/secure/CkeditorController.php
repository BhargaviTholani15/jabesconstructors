<?php

namespace App\Http\Controllers\Admin\secure;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CkeditorController extends Controller
{
    public function upload(Request $request)
    {
        if ($request->hasFile('upload')) {
            $file = $request->file('upload');
            $dir = date('Y/m/d');
            $fileName = time() . '_' . preg_replace('/[^A-Za-z0-9._-]/', '-', $file->getClientOriginalName());
            $file->storeAs($dir, $fileName, 'public_uploads');
            $url = url('cloud/' . $dir . '/' . $fileName);

            return response()->json([
                'uploaded' => 1,
                'fileName' => $fileName,
                'url' => $url
            ]);
        }

        return response()->json([
            'uploaded' => 0,
            'error' => ['message' => 'No file uploaded.']
        ]);
    }
}
