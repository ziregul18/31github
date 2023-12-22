@extends('layouts.admin')
@section('content')

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <div class="d-flex align-items-center">
            <img style="height: 100px; width: auto" src="{{ asset($category->logo) }}" alt="Category Logo" class="logo-img mr-3">
            <div>
                <h1 class="display-4">{{ $category->title_ky }}</h1>
                <p class="lead"> {{ strip_tags($category->description_ky) }}</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="card-deck mb-3 text-center">
            @foreach($category->subcategories as $subcategory)
                <div class="card mb-4 box-shadow">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">{{$subcategory->title_ky}}</h4>
                </div>
                <div class="card-body">
                    <div class="m-3 ">
                     <img style="height: 100px; width: auto" src="{{ asset($subcategory->logo) }}" alt="Category Logo" class="logo-img mr-3">
                    </div>
                    <a href="{{ route('admin.subcategory.show', $subcategory->id) }}" class="btn btn-lg btn-block btn-primary">See {{$subcategory->title_ky}}</a>
                </div>
            </div>
            @endforeach
        </div>

    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
        Holder.addTheme('thumb', {
            bg: '#55595c',
            fg: '#eceeef',
            text: 'Thumbnail'
        });
    </script>


@endsection




