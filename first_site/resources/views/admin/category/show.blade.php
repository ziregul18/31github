@extends('layout.admin')
@section('content')

    <div>
        <div>{{ $category->id }} . {{ $category->title_ky }}</div>
        <div>{{ $category->description_ky }}</div>
    </div>
    <div>
{{--        <a href="{{ route('$category.edit', $category->id) }}">Edit</a>--}}
    </div>
    <div>
{{--        <form action="{{ route('$category.delete', $category->id) }}" method="post">--}}
{{--            @csrf--}}
{{--            @method('delete')--}}
{{--            <input type="submit" value="Delete" class="btn btn-danger">--}}
{{--        </form>--}}
    </div>
    <div>
        <a href="{{ route('admin.category.index') }}">Back</a>
    </div>

@endsection
