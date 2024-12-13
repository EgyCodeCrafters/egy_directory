

@extends('layouts.app')

@section('head')
<title>  {{$directory->name}} |  دليل المنصورية</title>
<meta property="og:title" content="{{$directory->name}} | دليل المنصورية ">
@endsection

@section('content')

    <div class="jumbotron">
        <h1 class="display-6">{{$directory->name}}</h1>
        <p class="lead">{{$directory->description}}</p>
        <hr class="my-4">
    </div>

    @include('partials.directory')

@endsection
