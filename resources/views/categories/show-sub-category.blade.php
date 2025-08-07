<title>دليل المنصورية | {{ $sub_category->name }} </title>

@extends('layouts.app')

@section('content')
    <a class="dropdown-item" href="{{ url('category/' . $sub_category->category->id) }}">
        {{ $sub_category->category->name }}
    </a>



    <div class="jumbotron">
        <h1 class="display-6">{{ $sub_category->name }} </h1>
    </div>


    @include('partials.add')
    <hr class="my-4">



    @if (!count($sub_category->directories))
        <div class="alert alert-danger" role="alert">
            التصنيف فارغ ٫ كن الأول اضف نشاطك للتصنيف الان
            <a href="{{ route('add-directory', ['category_id' => $sub_category->category->id, 'sub_category_id' => $sub_category->id]) }}" class="btn btn-dark">
                اضافة
            </a>
        </div>

    @endif

    <div class="row">
        @foreach ($sub_category->directories as $directory)
            @include('partials.directory')
        @endforeach
    </div>
@endsection
