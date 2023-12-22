@extends('user.layouts.app')

@section('content')
    <div class="mb-4">
        <div class="bg-white rounded-lg overflow-hidden shadow relative">
            <div class="text-center p-4 h-auto md:h-40 lg:h-20">
                <a href="{{ route('user.display', $video->id) }}" class="block text-blue-500 hover:text-blue-600 font-semibold mb-2 text-lg md:text-base lg:text-lg">
                    {{ $video->title_ky }}
                </a>
            </div>
            <video id="myVideo" width="640" height="360" controls onclick="startWatch()">
                <source src="{{ "/".$video->video_path_ky }}" type="video/mp4" >
                Your browser does not support the video tag.
            </video>

        </div>
    </div>
    <script>
        function startWatch()
        {
            console.log(localStorage.getItem('manas_help_users_token'))
            console.log("start Watch");
        }
    </script>
@endsection
