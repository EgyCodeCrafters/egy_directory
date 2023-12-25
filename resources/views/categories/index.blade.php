@extends('layouts.app')

<div class="container">
    @section('content')
        <div class="row">
            <div class="jumbotron">
                <h1 class="display-6">أهلا بكم في دليل المنصورية</h1>
                <p class="lead">خدمة مجانية لتسهيل الوصول لأصحاب المهن وأرباب الحرف.</p>
            </div>
        </div>
        <div class="row">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/3uW3WMcE08w?si=-ubVW7vB_g-WvvPy"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
        </div>

        <hr class="my-4">

        <div class="row">
            @foreach ($categories as $category)
                <div class="col-md-4 mb-4">
                    <div class="card bg-light mb-3">
                        <a href="{{ url('category',$category->id) }}">
                            <div class="card-header">
                                <h5 class="card-title">
                                    {{$category->name}} ({{count($category->directories)}})
                                </h5>
                            </div>
                            <div class="card-body">
                                <p class="card-text">{{ $category->description }}</p>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    @endsection
</div>
