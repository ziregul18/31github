@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-sm-12 col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">{{$subcategory->title_ky}}</h4>
                        <h4 class="card-title">{{$subcategory->title_tr}}</h4>
                        <h4 class="card-title">{{$subcategory->id}}</h4>

                                <button type="button" class="btn btn-primary mt-2 mr-2" data-toggle="modal" data-target=".bd-example-modal-xl">Add</button>
                                <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog"   aria-hidden="true">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Modal title</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p> <div class="header-action">
                                                    <i data-toggle="collapse" data-target="#breadcrumb-1" >
                                                        <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                                                        </svg>
                                                    </i>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <form action="{{route('admin.subcategory.store.video',$subcategory->id)}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="title_ky">Title KG</label>
                                                        <input name="title_ky" id="title_ky" class="form-control">
                                                        @error('title_ky')
                                                        <p class="text-danger">{{$message}}</p>
                                                        @enderror
                                                        <div class="form-floating mb-3">
                                                            <label for="description_ky">description_ky</label>
                                                            <textarea class="form-control" placeholder="description_ky" id="description_ky" name="description_ky"></textarea>
                                                        </div>
                                                        @error('description_ky')
                                                        <p class="text-danger">{{$message}}</p>
                                                        @enderror
                                                    </div>
                                                    <p>Custom Kg file:</p>
                                                    <div class="custom-file mb-3">
                                                        <input type="file" class="custom-file-input" id="customFile" name="video_ky">
                                                        <label class="custom-file-label" for="customFile">Файл тандаңыз </label>
                                                        @error('video_ky')
                                                        <p class="text-danger">{{$message}}</p>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="title_tr">Title TR</label>
                                                        <input name="title_tr" id="title_tr" class="form-control">
                                                        @error('title_tr')
                                                        <p class="text-danger">{{$message}}</p>
                                                        @enderror
                                                        <div class="form-floating mb-3">
                                                            <label for="description_tr">Description_tr</label>
                                                            <textarea class="form-control" id="description_tr" name="description_tr"></textarea>
                                                        </div>
                                                    </div>
                                                    @error('description_tr')
                                                    <p class="text-danger">{{$message}}</p>
                                                    @enderror
                                                    <div class="custom-file mb-3">
                                                        <input type="file" class="custom-file-input" id="customFile" name="video_tr">
                                                        <label class="custom-file-label" for="customFile">File Seçiniz </label>
                                                        @error('video_tr')
                                                        <p class="text-danger">{{$message}}</p>
                                                        @enderror
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </form>

                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="card">
                                    <div class="row">
                                        @foreach($subcategory->videos as $video)
                                            <div class="col-sm-6 col-md-6 col-lg-3">
                                                <div class="card">
                                                    <video class="card-img-top" controls>
                                                        <source src="{{asset($video->video_path_ky)}}">
                                                        Your browser does not support the video tag.
                                                    </video>
                                                    <div class="card-body">
                                                        <h4 class="card-title">{{$video->title_ky}}</h4>
                                                        <p class="card-text">{{$video->description_ky}} </p>
                                                        <a href="#" class="btn btn-primary">Button</a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach


                                </div>
                                </p>

                    </div>


                    <div class="header-action">
                        <i data-toggle="collapse" data-target="#breadcrumb-1">
                            <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                            </svg>
                        </i>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="card">
        <div class="row">
            @foreach($subcategory->videos as $video)
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="card">
                        <video class="card-img-top" controls>
                            <source src="{{asset($video->video_path_ky)}}">
                            Your browser does not support the video tag.
                        </video>
                        <div class="card-body">
                            <h4 class="card-title">{{$video->title_ky}}</h4>
                            <p class="card-text">{{$video->description_ky}} </p>
                            <a href="#" class="btn btn-primary">Button</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

    </div>

@endsection
