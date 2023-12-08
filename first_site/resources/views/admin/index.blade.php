@extends('layout.admin')
@section('content')
    <form>
        <div class="input-group rounded">
            <input type="search" class="form-control rounded" placeholder="Search video" aria-label="Search" aria-describedby="search-addon" />
            <span class="input-group-text border-0" id="search-addon">
                <button type="submit" class="border-0 bg-transparent">
                    <i class="svg-icon small-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                        </svg>
                    </i>
                </button>
            </span>
        </div>
    </form>
@endsection
