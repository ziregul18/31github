<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Services\UploadService;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    private UploadService $uploadService;
    public function __construct(UploadService $uploadService)
    {
        $this->uploadService = $uploadService;
    }

    public function index()
    {
        $videos = Video::all();
        return view('admin.video.index', compact('videos'));

    }

    public function storeVideo(Request $request , Subcategory $subcategory , Category $category)
    {

        $data = $request->validate([
            "title_ky" => "required",
            "video_ky" => "required",
            "video_tr" => "required",
            "title_tr" => "required"
        ]);
        $data['video_ky'] = $this->uploadService->upload($data['video_ky'], 'videos');
        $data['video_tr'] = $this->uploadService->upload($data['video_tr'], 'videos');

        Video::create($data);
        return redirect()->route('admin.subcategory.index');

    }

}
