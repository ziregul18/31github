<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Subcategory\StoreRequest;
use App\Http\Requests\Admin\Subcategory\StoreVideoRequest;
use App\Http\Requests\Admin\Subcategory\UpdateRequest;
use App\Http\Services\Admin\SubcategoryService;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Video;
use http\Env\Request;


class SubcategoryController extends Controller
{
    private SubcategoryService $subcategoryService;

    public function __construct(SubcategoryService $subcategoryService)
    {
        $this->subcategoryService = $subcategoryService;
    }

    public function index(){
        $subcategories = Subcategory::all();
        return view('admin.subcategory.index', compact('subcategories'));
    }

    public function create(){
        $categories = Category::all();
        return view('admin.subcategory.create', compact('categories'));
    }

    public function store(StoreRequest $request){
        $data = $request->validated();
        $result = $this->subcategoryService->store($data);
        return redirect()->route('admin.subcategory.index')->with(['notification'=> $result['notification']]);
    }

    public function delete(Subcategory $subcategory){
        $subcategory->delete();
        return redirect()->route('admin.subcategory.index')->with(['notification' => 'Subcategory deleted successfully.']);
    }

    public function edit(Subcategory $subcategory){
        $categories = Category::all();
        return view('admin.subcategory.edit', compact('subcategory', 'categories'));
    }

    public function update(UpdateRequest $request, Subcategory $subcategory){
        $data = $request->validated();
        $result = $this->subcategoryService->update($subcategory, $data, $request->hasFile('logo'));
        return redirect()->route('admin.subcategory.index')->with(['notification'=> $result['notification']]);
    }

    public function show(Subcategory $subcategory)
    {
        $videos = Video::all();
      return view('admin.subcategory.show', compact('subcategory', 'videos'));
    }


    public function storeVideo(StoreVideoRequest $request, Subcategory $subcategory)
    {
        $data = $request->validated();
        $result = $this->subcategoryService->storeVideo($data, $subcategory->id);
        return redirect()->back()->with(['notification' => $result['notification']]);
    }


}
