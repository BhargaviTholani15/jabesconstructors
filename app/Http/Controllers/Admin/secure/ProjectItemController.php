<?php

namespace App\Http\Controllers\Admin\secure;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class ProjectItemController extends Controller
{
    public function index()
    {
        $data = DB::table('projects')
            ->leftJoin('project_categories', 'projects.category_id', '=', 'project_categories.id')
            ->where('projects.active_flag', 1)
            ->select('projects.*', 'project_categories.name as category_name')
            ->orderBy('project_categories.order_no')
            ->orderByDesc('projects.created_at')
            ->get();

        return view('admin/projects/items', ['data' => $data]);
    }

    public function add(?string $id = null)
    {
        $categories = DB::table('project_categories')
            ->where('active_flag', 1)
            ->orderBy('order_no')
            ->get();

        if ($id != null) {
            $data = DB::table('projects')->where('id', $id)->first();
            return view('admin/projects/item-save', ['data' => $data, 'categories' => $categories]);
        }
        return view('admin/projects/item-save', ['categories' => $categories]);
    }

    public function save(Request $request, ?string $id = null)
    {
        $request->validate([
            'title' => 'required',
            'category_id' => 'required',
        ]);

        $data = [
            'title' => $request->input('title'),
            'category_id' => $request->input('category_id'),
            'description' => $request->input('description'),
            'order_no' => $request->input('order_no'),
            'updated_at' => Carbon::now(),
        ];

        // Handle multiple images
        $existingImages = [];
        if ($id != null) {
            $existing = DB::table('projects')->where('id', $id)->first();
            if ($existing && $existing->images) {
                $existingImages = json_decode($existing->images, true) ?? [];
            }
        }

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $dir = date('Y/m/d');
                $fileName = time() . '_' . rand(100, 999) . '_' . preg_replace('/[^A-Za-z0-9._-]/', '-', $file->getClientOriginalName());
                $file->storeAs($dir, $fileName, 'public_uploads');
                $existingImages[] = $dir . '/' . $fileName;
            }
        }

        $data['images'] = json_encode($existingImages);

        // Handle thumbnail
        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $dir = date('Y/m/d');
            $fileName = time() . '_thumb_' . preg_replace('/[^A-Za-z0-9._-]/', '-', $file->getClientOriginalName());
            $file->storeAs($dir, $fileName, 'public_uploads');
            $data['thumbnail'] = $dir . '/' . $fileName;
        }

        // Handle video
        if ($request->hasFile('video')) {
            $file = $request->file('video');
            $dir = date('Y/m/d');
            $fileName = time() . '_vid_' . preg_replace('/[^A-Za-z0-9._-]/', '-', $file->getClientOriginalName());
            $file->storeAs($dir, $fileName, 'public_uploads');
            $data['video_path'] = $dir . '/' . $fileName;
        }

        if ($id != null) {
            DB::table('projects')->where('id', $id)->update($data);
        } else {
            $data['created_at'] = Carbon::now();
            DB::table('projects')->insert($data);
        }

        return redirect('_admin/secure/project-items')->with('success', 'Project saved successfully');
    }

    public function deleteImage(Request $request, $id)
    {
        $project = DB::table('projects')->where('id', $id)->first();
        if (!$project) return back()->with('error', 'Project not found');

        $images = json_decode($project->images, true) ?? [];
        $removeIndex = $request->input('image_index');

        if (isset($images[$removeIndex])) {
            unset($images[$removeIndex]);
            $images = array_values($images);
        }

        DB::table('projects')->where('id', $id)->update([
            'images' => json_encode($images),
            'updated_at' => Carbon::now(),
        ]);

        return back()->with('success', 'Image removed');
    }

    public function delete($id)
    {
        DB::table('projects')->where('id', $id)->update(['active_flag' => 0]);
        return redirect('_admin/secure/project-items')->with('success', 'Project deleted');
    }
}
