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
                <div class="card bg-light mb-3">
                    <div class="card-header">
                        <h5 class="card-title">  {{ $directory->name }}</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">{{ $directory->description }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection
