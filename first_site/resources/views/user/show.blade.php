@extends('user.layouts.app')
@section('content')
    <main class="py-4">
        <div class="px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                @foreach ($subcategory->videos as $video)
                    <div class="mb-4">
                        <div class="bg-white rounded-lg overflow-hidden shadow relative">

                                <video class="card-img-top" controls>
                                    <source src="{{asset($video->video_path_ky)}}">
                                    Your browser does not support the video tag.
                                </video>

                            <div class="p-4 h-auto md:h-40 lg:h-20">
                                <a href="{{route('user.display', $video->id)}}" class="block text-blue-500 hover:text-blue-600 font-semibold mb-2 text-lg md:text-base lg:text-lg">
                                    {{ $video->title_ky }}
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection
