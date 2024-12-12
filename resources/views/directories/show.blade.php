

@extends('layouts.app')

@section('head')
<title >دليل المنصورية | {{$directory->name}} </title>
<meta property="og:title" content="دليل المنصورية | {{$directory->name}}">
@endsection


@section('content')

    <div class="jumbotron">
        <h1 class="display-6">{{$directory->name}}</h1>
        <p class="lead">{{$directory->description}}</p>
        <hr class="my-4">
    </div>

    @include('partials.directory')

@endsection
