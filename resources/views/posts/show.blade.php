@extends('layouts.app')

@section('content')
    
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a  href="/posts/{{$post->id}}/edit" class="btn btn-warning"> Edit </a> 
            <br><br>
            <div class="card">       
                <div class="card-body">
                    Title : {{ $post->title }} <br>
                    Description : {{ $post->description }} <br>
                    Created At : {{ $post->created_at }} <br>
                    Post Image: 
                    @if ($post->img)
                        <img src="{{ URL::asset('storage/img/'.$post->img) }} " style="width:100px; height:100px;"/>
                    @else
                        No image available
                    @endif

                    @if ($comments)
                        <h5> Comments </h5>
                        <ul>
                        @foreach ($comments as $comment)
                                <li>{{ $comment->description }} </li>    

                                <a href="" id="reply"></a>
                                <form method="post" action="{{ route('comments.store') }}">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" name="description" class="form-control" />
                                        <input type="hidden" name="post_id" value="{{ $comment->post_id }}" />
                                        <input type="hidden" name="parent_id" value="{{ $comment->id }}" />
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-warning" value="Reply" />
                                    </div>
                                </form>
                        @endforeach 
                            </ul>                           
                    @endif

                    <h4> Add Comment </h4>

                    <form method="POST" action="{{ route('comments.store') }}">
                        @csrf
                        <div class="form-group">
                                <textarea class="form-control" name="description"></textarea>
                                <input type="hidden" name="post_id" value="{{ $post->id }}">                                    
                        </div>
                        <div class="form-group">
                                <input type="submit" class="btn btn-success" value="Add Comment">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection