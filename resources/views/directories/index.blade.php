@extends('layouts.app')

@section('content')
    @if (!count($directories))
        <div class="alert alert-danger" role="alert">
            التصنيف فازغ
        </div>
    @endif
    <div class="row">
        @foreach ($directories as $directory)
            <div class="col-md-4 mb-4">
                <div class="card bg-light mb-3">
                    <a href="{{ url('directory', $directory->id) }}">
                        <div class="card-header">
                            <h5 class="card-title"> {{ $directory->name }}</h5>
                        </div>
                        <div class="card-body">
                            <img src="{{ $directory->image_url }}" alt="Directory Image" style="max-width:200px; height:auto;">
                            <p class="card-text">{{ $directory->description }}</p>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
