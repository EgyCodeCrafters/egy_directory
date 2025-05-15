

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


        @if($directory->name!="الشيخ محمدي عبدالمجيد عبدالجيد -رحمه الله-")
            @if(!empty($directory->phone))
                <li><a target="_blank" href="tel:{{             Str::of(urldecode($directory->phone))->replaceMatches('/[^a-zA-Z0-9:\/.]/', '')
 }}">{{ $directory->phone }} <i class="fas fa-solid fa-mobile"></i></a></li>
            @endif


            @if(!empty($directory->whatsapp))
                <li>

                    <a target="_blank"
                       href="https://api.whatsapp.com/send?phone=+2{{ Str::of(urldecode($directory->whatsapp))->replaceMatches('/[^a-zA-Z0-9:\/.]/', '')}}&text=توصلت لرقمك من دليل المنصورية http://directory.egycodecrafters.com/ ">
                        {{ $directory->whatsapp }}
                        <i class="fab fa-whatsapp" aria-hidden="true"></i>
                    </a>
                </li>
            @endif
        @endif
        @if(filter_var($directory->facebook, FILTER_VALIDATE_URL))
            <li>
                <a target="_blank"
                   href="{{$directory->facebook}}">{{$directory->facebook}}
                    <i class="fab fa-facebook"></i>
                </a>
            </li>
        @endif


        @if(filter_var($directory->behance, FILTER_VALIDATE_URL))
            <li>
                <a target="_blank"
                   href="{{$directory->behance}}">{{$directory->behance}}
                    <i class="fab fa-behance"></i>
                </a>
            </li>
        @endif

        @if(!empty($directory->google_map))
            <li>
                <a target="_blank"
                   href="{{$directory->google_map}}">   {{$directory->google_map}}
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                </a>


            </li>
        @endif

        @if(!empty($directory->website))
            <li>
                <a target="_blank"
                   href="{{$directory->website}}">  {{$directory->website}}
                    <i class="fa fa-globe" aria-hidden="true"></i>
                </a>

            </li>
        @endif

        @if(!empty($directory->telegram))
            <li>
                <a target="_blank"
                   href="{{$directory->telegram}}">{{$directory->telegram}}
                    <i class="fab fa-telegram" aria-hidden="true"></i>
                </a>

            </li>
        @endif



        @if(!empty($directory->youtube))
            <li>
                <a target="_blank"
                   href="{{$directory->youtube}}"> {{$directory->youtube}}
                    <i class="fab fa-youtube" aria-hidden="true"></i>
                </a>

            </li>
            @endif
            </ul>
            @foreach($directory->categories as $category)
                <span class="badge">
                    <a href="{{url("category/$category->id")}}">{{$category->name}}</a>
                </span>
            @endforeach

    </div>

@endsection
