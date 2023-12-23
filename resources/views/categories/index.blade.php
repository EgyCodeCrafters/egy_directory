@extends('layouts.app')

@section('content')
    <div class="row">
        @foreach ($categories as $category)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title"><a href="{{ url('category',$category->id) }}">
                                {{ $category->name }}
                            </a></h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">{{ $category->description }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
