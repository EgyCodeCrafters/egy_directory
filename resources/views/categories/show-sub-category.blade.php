<title>دليل المنصورية | {{ $sub_category->name }} </title>

@extends('layouts.app')

@section('content')
    <a class="dropdown-item" href="{{ url('category/' . $sub_category->category->id) }}">
        {{ $sub_category->category->name }}
    </a>



    <div class="jumbotron">
        <h1 class="display-6">{{ $sub_category->name }} </h1>
    </div>


    <hr class="my-4">



    @if (!count($sub_category->directories))
        @include('partials.add')
    @endif

    <div class="row">
        @foreach ($sub_category->directories as $directory)
            @include('partials.directory')
        @endforeach
    </div>
@endsection
