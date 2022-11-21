@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>
                    <div class="card-body">
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{session('success')}}
                            </div>
                        @endif
                        <form method="POST" action="/upload" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label for="file"
                                       class=" col-form-label text-md-start">{{ __('Upload File') }}</label>
                                <div class="">
                                    <input id="file" type="file" class="form-control @error('file') is-invalid @enderror" name="file">
                                    @error('file')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-0">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Upload File') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                        @if(session('path'))
{{--                            <h1>{{storage_path('uploads')}}</h1>--}}
                                <h1>{{asset(session('path'))}}</h1>
{{--                            <img src="{{url('storage/uploads/'.session('path'))}}" class="card-img" alt="image">--}}
                                <img src="{{session('path')}}" class="card-img" alt="image">
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
