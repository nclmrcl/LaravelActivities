@extends('layouts.dashboard')

@section('content')

    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="container"> 
                    @foreach ($posts as $post)
                        <div class="card">
                            @if ($post->img != '')
                               <img class="card-img-top" src="{{ asset('/storage/img/'. $post->img) }}" alt="Card image cap" style="width:100%;">
                            @endif
                                <div class="card-body"> 
                                    <h5 class="card-title">{{ $post->title }}</h5>
                                    <p class="card-text">{{ $post->description }}</p>
                                    <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">View Post</a>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Last updated {{ $post->updated_at }}</small>
                                 </div>
                        </div>
                        
                    @endforeach
                </div>
            </div>
        </div>
    </body>

@endsection