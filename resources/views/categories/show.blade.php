<title>دليل المنصورية | {{ $category->name }} </title>

@extends('layouts.app')

@section('content')
    <div class="jumbotron">
        <h1 class="display-6">{{ $category->name }} </h1>


    </div>


    <div class="d-flex flex-wrap gap-2">
        @foreach ($category->subCategories as $subCategory)
            <a href="{{ url('sub-category', $subCategory->id) }}" class="badge bg-secondary text-decoration-none">
                {{ $subCategory->name }}
            </a>
        @endforeach
    </div>


    <hr class="my-4">



    @if (!count($category->directories))
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
