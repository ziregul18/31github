@extends('layouts.admin')
@section('content')

    <h1>Subcategories</h1>

    <form action="{{ route('admin.index') }}" method="GET">
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

        <div class="container-fluid">
            <div class="row">
                @foreach ($subcategories as $subcategory)
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="card">
                            <img style="height: 250px; width: auto" src="{{ $subcategory->logo }}" class="card-img-top"
                                 alt="#">
                            <div class="card-body">
                                <h4 class="card-title">{{  $subcategory->title_ky  }}</h4>
                                <p class="card-text">{{ Illuminate\Support\Str::limit(strip_tags($subcategory->description_ky), 100) }}</p>
                                <a href="{{ route('admin.subcategory.show', $subcategory->id) }}"
                                   class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
@endsection
