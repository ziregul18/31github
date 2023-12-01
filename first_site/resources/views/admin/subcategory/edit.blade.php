@extends('layout.admin')
@section('content')
    <div class="row">
        <div class="col-sm-12 col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title"> Default Validation</h4>
                    </div>
                    <div class="header-action">
                        <i data-toggle="collapse" data-target="#form-validation-1" aria-expanded="false">
                            <svg width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                            </svg>
                        </i>
                    </div>
                </div>
                <div class="card-body">
                    <div class="collapse" id="form-validation-1"></div>

                    <form action="{{ route('admin.subcategory.update', $subcategory->id) }}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="title_ky">Title_ky</label>
                                <input type="text" class="form-control" id="title_ky" name="title_ky" required=""
                                       value="{{ $subcategory->title_ky }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="title_tr">Title_tr</label>
                                <input type="text" class="form-control" id="title_tr" name="title_tr" required=""
                                       value="{{ $subcategory->title_tr }}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="description_ky">Description_ky</label>
                                <textarea id="description_ky"
                                          name="description_ky"> {{ $subcategory->description_ky }}</textarea>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="description_tr">Description_tr</label>
                                <textarea id="description_tr"
                                          name="description_tr"> {{ $subcategory->description_tr }}</textarea>
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="mb-4 mt-4">
                                <img style="width: 250px; height: 250px;" src="{{asset($subcategory->logo)}}">
                            </div>
                            <div class="custom-file mb-3">
                                <input type="file" class="custom-file-input" id="logo" name="logo"
                                       value="{{ $subcategory->logo }}">
                                <label class="custom-file-label" for="logo">logo</label>
                            </div>
                            @error('logo')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="category_id">Category</label>
                                <select id="category_id" name="category_id" class="form-control">
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}" {{ $subcategory->category_id == $category->id ? 'selected' : '' }}>{{$category->title_ky}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group mb-0">
                            <button class="btn btn-primary" type="submit">Update</button>
                                <a href="{{ route('admin.subcategory.index') }}" class="btn btn-primary">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
