@extends('layout.admin')
@section('content')
    <div class="row">
        @foreach($category->subcategories as $subcategory)
            <div class="col-md-4">
                <a href="{{ route('admin.subcategory.show', $subcategory->id) }}">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="">
                                    <p class="mb-2 text-secondary">{{$subcategory->title_ky}}</p>
                                    <div class="d-flex flex-wrap justify-content-start align-items-center">
                                        <h5 class="mb-0 font-weight-bold">$95,595</h5>
                                        <p class="mb-0 ml-3 text-success font-weight-bold">+3.55%</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>


@endsection