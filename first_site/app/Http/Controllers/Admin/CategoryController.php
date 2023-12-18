<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\StoreRequest;
use App\Http\Requests\Admin\Category\UpdateRequest;
use App\Http\Requests\Admin\Subcategory\StoreVideoRequest;
use App\Http\Services\Admin\CategoryService;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Video;

class CategoryController extends Controller
{
    private CategoryService $categoryService;
    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
    }

    public function show(Category $category){
        $videos = Video::all();
        return view('admin.category.show', compact('category','videos'));
    }

    public function create(){
        return view('admin.category.create');
    }
    public function store(StoreRequest $request){
        $data = $request->validated();
        $result = $this->categoryService->store($data);
        return redirect()->route('admin.category.index')->with(['notification'=> $result['notification']]);

    }

    public function delete(Category $category) {
        $category->delete();
        return redirect()->route('admin.category.index')->with(['notification' => 'Category deleted successfully.']);
    }


    public function edit(Category $category){
        return view('admin.category.edit', compact('category'));
    }
    public function update(UpdateRequest $request, Category $category){
        $data = $request->validated();
        $result = $this->categoryService->update($category, $data, $request->hasFile('logo'));
        return redirect()->route('admin.category.index')->with(['notification'=> $result['notification']]);
    }
    public function storeVideo(StoreVideoRequest $request, Category $category)
    {
        $data = $request->validated();
        $result = $this->categoryService->storeVideo($data, $category->id);
        return redirect()->back()->with(['notification' => $result['notification']]);
    }

}
