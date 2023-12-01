<?php

namespace App\Http\Services\Admin;

use App\Http\Services\UploadService;
use App\Models\Category;
use Exception;

class CategoryService
{
    private UploadService $uploadService;
    public function __construct(UploadService $uploadService)
    {
        $this->uploadService = $uploadService;
    }

    public function store(array $data): array {
        try {
            $data['logo'] = $this->uploadService->upload($data['logo'], 'logos');
            Category::create($data);
            return ['notification' => 'Category created successfully.'];
        } catch (Exception $e){
            return ['notification' => $e->getMessage()];
        }
    }




    public function update(Category $category, array $data, bool $exists_image): array
    {
        try{
            if ($exists_image) {
                $data['logo'] = $this->uploadService->upload($data['logo'], 'logos');
            }
            $category->update($data);

            return ['notification' => 'Category updated successfully.'];
        }
        catch (Exception $e){
            return ['notification' => $e->getMessage()];
        }
    }
}
