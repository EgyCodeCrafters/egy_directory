@extends('layouts.app')

@section('content')

    <div class="jumbotron">
        <h1 class="display-6">أهلا بكم في دليل المنصورية</h1>
        <p class="lead">خدمة مجانية لتسهيل الوصول لأصحاب المهن وأرباب الحرف.</p>
        <hr class="my-4">

    </div>


    <div class="row">
        @foreach ($categories as $category)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <a href="{{ url('category',$category->id) }}">
                        <div class="card-header">
                            <h5 class="card-title">
                                {{ $category->name }}
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
