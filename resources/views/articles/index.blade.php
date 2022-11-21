@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Articles List') }}</div>

                    <div class="card-body">
                        @foreach($articles as $article)
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title">
                                        <h1><a href="{{ route('articles.show', $article) }}">
                                                {{ $article->title }}</a></h1>
                                        <b class="font-bold">posted by {{format_date( $article->created_at)}}</b>
                                        <p>{{$article->body}}</p>
                                        <hr>
                                        <div class="bg-gradient p-2 text-bg-warning border-r-20">
                                            @foreach($article->comments as $comment)
                                                <P>{{$comment->body }}</P>
                                                commented by {{$comment->user->name}}
                                                at <b class="font-bold">{{format_date($comment->created_at)}}</b>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                            {{ $articles->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
