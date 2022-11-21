@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Articles Detail') }}</div>
                    <div class="card-body">
                        <div class="card">
                            <div class="card-body">
                                <b class="card-title">
                                    <h1>{{ $article->title }}   </h1>
                                    <b><span>{{format_date( $article->created_at)}}</span></b>
                                    <p>{{$article->body}}</p>
                                    <div class="bg-gradient p-2 text-bg-warning border-r-20">
                                        @foreach($article->comments as $comment)
                                            <P>{{$comment->body }}</P>
                                            commented by {{$comment->user->name}} at
                                            <b>{{format_date($comment->created_at)}}</b>
                                        @endforeach
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
