
@extends('user.layouts.app')
@section('content')

    <main class="py-4">
        <div class="px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                @foreach ($subcategories as $subcategory)
                    <div class="mb-4">
                        <div class="bg-white rounded-lg overflow-hidden shadow relative">
                            <img class="h-56 w-full object-cover object-center" src="{{ asset($subcategory->logo) }}" alt="">
                            <div class="p-4 h-auto md:h-40 lg:h-48">
                                <a href="{{ route('user.show', $subcategory->id) }}" class="block text-blue-500 hover:text-blue-600 font-semibold mb-2 text-lg md:text-base lg:text-lg">
                                    {{ $subcategory->title_ky }}
                                </a>
                                <div class="text-gray-600 text-sm leading-relaxed block md:text-xs lg:text-sm">
                                    {{ Illuminate\Support\Str::limit(strip_tags($subcategory->description_ky), 100) }}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>

@endsection
