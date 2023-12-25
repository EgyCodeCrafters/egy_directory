<title>دليل المنصورية | {{$category->name}} </title>

@extends('layouts.app')

@section('content')

    <div class="jumbotron">
        <h1 class="display-6">{{$category->name}} ({{count($category->directories)}})</h1>
        <p class="lead">{{$category->description}}</p>
        <hr class="my-4">
    </div>



    @if(!count($category->directories))
        <div class="alert alert-danger" role="alert">
            التصنيف فارغ ٫ كن الأول واضف نفسك للتصنيف الان <a href="/add" class="btn btn-dark">اضافة</a>

        </div>

    @endif

    <div class="row">
        @foreach ($category->directories as $directory)
            @include('partials.directory')
        @endforeach
    </div>

@endsection
