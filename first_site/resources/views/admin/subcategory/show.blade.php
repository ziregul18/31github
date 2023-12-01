@extends('layout.admin')
@section('content')
    <div class="row">
        <div class="col-sm-12 col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">{{$subcategory->title_ky}}</h4>
                        <h4 class="card-title">{{$subcategory->title_tr}}</h4>
                        <h4 class="card-title">{{$subcategory->id}}</h4>
                    </div>
                    <div class="header-action">
                        <i data-toggle="collapse" data-target="#breadcrumb-1" >
                            <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                            </svg>
                        </i>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Видео жүктөө</h4>
                                </div>
                                <div class="header-action">
                                    <i data-toggle="collapse" data-target="#form-file-uploader-1" aria-expanded="false">
                                        <svg width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                                        </svg>
                                    </i>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="collapse" id="form-file-uploader-1">

                                </div>

                                <form action="{{route('admin.subcategory.store.video',$subcategory->id)}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="title_ky">Title KG</label>
                                        <input name="title_ky" id="title_ky" class="form-control">
                                        @error('title_ky')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <p>Custom Kg file:</p>
                                    @csrf
                                    <div class="custom-file mb-3">
                                        <input type="file" class="custom-file-input" id="customFile" name="video_ky">
                                        <label class="custom-file-label" for="customFile">Файл тандаңыз </label>
                                        @error('video_ky')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    @csrf
                                    <div class="form-group">
                                        <label for="title_tr">Title TR</label>
                                        <input name="title_tr" id="title_tr" class="form-control">
                                        @error('title_tr')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <p>Custom Tr file:</p>
                                    @csrf
                                    <div class="custom-file mb-3">
                                        <input type="file" class="custom-file-input" id="customFile" name="video_tr">
                                        <label class="custom-file-label" for="customFile">File Seçiniz </label>
                                        @error('video_tr')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>


{{--                                    <div id="carouselExample" class="carousel slide">--}}
{{--                                        <div class="carousel-inner">--}}
{{--                                            <div class="carousel-item active">--}}
{{--                                                <img src="..." class="d-block w-100" alt="...">--}}
{{--                                            </div>--}}
{{--                                            <div class="carousel-item">--}}
{{--                                                <img src="..." class="d-block w-100" alt="...">--}}
{{--                                            </div>--}}
{{--                                            <div class="carousel-item">--}}
{{--                                                <img src="..." class="d-block w-100" alt="...">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">--}}
{{--                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
{{--                                            <span class="visually-hidden">Previous</span>--}}
{{--                                        </button>--}}
{{--                                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">--}}
{{--                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
{{--                                            <span class="visually-hidden">Next</span>--}}
{{--                                        </button>--}}
{{--                                    </div>--}}


                                    <head>
                                        <meta charset="UTF-8">
                                        <meta http-equiv="X-UA-Compatible" content="IE=edge">
                                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                        <title>Video Page</title>
                                    </head>
                                    <body>


{{--                                    @dd($videos)--}}
                                    @foreach($videos as $video)
                                            <h2>{{ $video->title }}</h2>
                                            <video width="640" height="360" controls>
                                                <source src="{{asset($video->video_path_ky)}}">
                                                Your browser does not support the video tag.
                                            </video>
                                    @endforeach



                                </form>
                        </div>

                    </div>
                </div>



                <div class="card-body">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">Embeds Video</h4>
                            </div>
                            <div class="header-action">
                                <i data-toggle="collapse" data-target="#video-1" aria-expanded="false">
                                    <svg width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                                    </svg>
                                </i>
                            </div>
                        </div>
                        <div class="card-body">
                            <p>Wrap any embed like an <code class="highlighter-rouge">&lt;iframe&gt;</code> in a parent element with <code class="highlighter-rouge">.embed-responsive</code> and an aspect ratio. The <code class="highlighter-rouge">.embed-responsive-item</code> isn’t strictly required, but we encourage it.</p>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://youtu.be/orrLjEEKpMo?si=OjtU-3XJDhus8eYj gp" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="collapse" id="breadcrumb-1">
                        <div class="card"></div>
                    </div>
                    <p>Use the items in order to programatically generate the breadcrumb links.use class <code>.breadcrumb to ol</code></p>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active" aria-current="page">Home</li>
                        </ol>
                    </nav>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Library</li>
                        </ol>
                    </nav>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Library</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Breadcrumb With Icon</h4>
                    </div>
                    <div class="header-action">
                        <i data-toggle="collapse" data-target="#breadcrumb-2" >
                            <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                            </svg>
                        </i>
                    </div>
                </div>
                <div class="card-body">
                    <div class="collapse" id="breadcrumb-2">
                        <div class="card"></div>
                    </div>
                    <p>Use the items in order to programatically generate the breadcrumb links.use class <code>.breadcrumb to ol</code> with Icon</p>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item align-items-center active" aria-current="page"><svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                </svg>Home</li>
                        </ol>
                    </nav>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class=" align-items-center"><svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="#4788ff">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                    </svg>Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Library</li>
                        </ol>
                    </nav>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="#4788ff">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                    </svg>Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Library</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

@endsection
