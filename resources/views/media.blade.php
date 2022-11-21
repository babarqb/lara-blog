@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Media') }}</div>
                    <div class="card-body">
                        @foreach($medias as $media)
                           <div class="">
                               <h1 class="card-title">{{$media->name}}</h1>
                               <img src="{{asset($media->path)}}" class="card-img-top" alt="image">
                           </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
