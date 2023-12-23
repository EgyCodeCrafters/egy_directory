@extends('layouts.app')

@section('content')

    @if(!count($directories))
        <div class="alert alert-danger" role="alert">
            التصنيف فازغ
        </div>

    @endif
    <div class="row">
        @foreach ($directories as $directory)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">  {{ $directory->name }}</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">{{ $directory->description }}</p>

                        @if(!empty($directory->phone))
                            <div><a target="_blank" href="tel:{{             Str::of(urldecode($directory->phone))->replaceMatches('/[^a-zA-Z0-9:\/.]/', '')
 }}">{{ $directory->phone }}</a></div>
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

                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection
