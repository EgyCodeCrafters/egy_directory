@extends('layouts.app')

@section('content')

    <div class="jumbotron">
        نتائج البحث عن <h1 class="display-6"> {{$query}} </h1>
        @if(!count($directories))
            <div class="alert alert-danger" role="alert">
                لم توجد نتائج تطابق البحث
            </div>

        @endif
        <hr class="my-4">
    </div>




    <div class="row">
        @foreach ($directories as $directory)
            @include('partials.directory')
        @endforeach
    </div>

@endsection
