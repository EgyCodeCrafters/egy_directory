<title>دليل المنصورية | {{$directory->name}} </title>

@extends('layouts.app')

@section('content')

    <div class="jumbotron">
        <h1 class="display-6">{{$directory->name}}</h1>
        <p class="lead">{{$directory->description}}</p>
        <hr class="my-4">
    </div>

    @include('partials.directory')

@endsection
