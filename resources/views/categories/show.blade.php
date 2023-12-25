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
            التصنيف فازغ
        </div>

    @endif
    <div class="row">
        @foreach ($category->directories as $directory)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">  {{ $directory->name }}</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">{{ $directory->description }}</p>

                        @if(!empty($directory->phone))
                            <div><a target="_blank" href="tel:{{             Str::of(urldecode($directory->phone))->replaceMatches('/[^a-zA-Z0-9:\/.]/', '')
 }}">{{ $directory->phone }} <i class="fas fa-solid fa-mobile"></i></a></div>
                        @endif


                        @if(!empty($directory->whatsapp))
                            <div>
                                <a target="_blank"
                                   href="https://wa.me/+2{{ Str::of(urldecode($directory->whatsapp))->replaceMatches('/[^a-zA-Z0-9:\/.]/', '')  }}">{{ $directory->whatsapp }}
                                    <i class="fab fa-whatsapp" aria-hidden="true"></i>
                                </a>
                            </div>
                        @endif

                        @if(filter_var($directory->facebook, FILTER_VALIDATE_URL))
                            <div>
                                <a target="_blank"
                                   href="{{$directory->facebook}}">فيسبوك
                                    <i class="fab fa-facebook"></i>
                                </a>
                            </div>
                        @endif


                        @if(!empty($directory->google_map))
                            <div>
                                <a target="_blank"
                                   href="{{$directory->google_map}}"> الموقع
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                </a>


                            </div>
                        @endif


                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection
