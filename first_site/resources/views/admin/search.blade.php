@extends('layouts.admin')
@section('content')
    <div class="container">
        <h1>Subcategories</h1>

        <form action="{{ route('subcategory.search') }}" method="GET">
            <div class="input-group mb-3">
                <input type="text" name="query" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-outline-primary">Search</button>
                </div>
            </div>
        </form>

        @if($subcategories->isEmpty())
            <p>No posts found.</p>
        @else
            <div class="row">
                @foreach ($subcategories as $subcategory)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $subcategory->title_ky }}</h5>
                                <p class="card-text">{{ Illuminate\Support\Str::limit($subcategory->description_ky, 100) }}</p>
                                <a href="{{ route('admin.subcategory.show', $subcategory->id) }}"
                                   class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            {{ $subcategories->links() }}  {{--  Assuming you want to paginate the results--}}
        @endif
    </div>

@endsection
