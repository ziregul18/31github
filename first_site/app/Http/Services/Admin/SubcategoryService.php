<?php

namespace App\Http\Services\Admin;

use App\Http\Services\UploadService;
use App\Models\Subcategory;
use App\Models\Video;
use Exception;
class SubcategoryService
{
    private UploadService $uploadService;
    public function __construct(UploadService $uploadService)
    {
        $this->uploadService = $uploadService;
    }

    public function store(array $data): array {
        try {
            $data['logo'] = $this->uploadService->upload($data['logo'], 'logos');
            Subcategory::create($data);
            return ['notification' => 'Subcategory created successfully.'];
        } catch (Exception $e){
            return ['notification' => $e->getMessage()];
        }
    }


    public function update(Subcategory $subcategory, array $data, bool $exists_image): array
    {
        try {
            if ($exists_image){
                $data['logo'] = $this->uploadService->upload($data['logo'], 'logos');
            }
            $subcategory->update($data);
            return ['notification' => 'Subcategory updated successfully.'];
        }
        catch (Exception $e){
            return ['notification' => $e->getMessage()];
        }
    }

    public function storeVideo(array $data, int $subcategory_id ): array
    {
        try {
            if(array_key_exists('video_tr', $data))
            {
                $data['video_path_tr'] = $this->uploadService->upload($data['video_tr'], 'videos');
                unset($data['video_tr']);
            }
            if(array_key_exists('video_ky', $data))
            {
                $data['video_path_ky'] = $this->uploadService->upload($data['video_ky'], 'videos');
                unset($data['video_ky']);
            }
            $data['subcategory_id'] = $subcategory_id;
            Video::create($data);
            return ['notification' => 'Video created successfully.'];
        }
        catch (Exception $exception)
        {
            return ['notification' => $exception->getMessage()];
        }
    }
}
