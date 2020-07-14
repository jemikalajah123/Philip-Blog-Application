@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if (count($post) > 0)
        @foreach ($post as $item)
            <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img style="width: 100%" src="/storage/cover_images/blog.jpg">
                    </div>
                    <div class="col-md-8"> 
                        <div class="card-body">          
                            <h3 class="card-title"><a href="/posts/{{$item->id}}"> {{$item->title}}</a></h3>
                            <p class="card-text">{!! $item->body !!} </p>
                            <p class="card-text"><small class="text-muted">Written on {{$item->created_at}} by {{$item->user->name}}</small></p>
                        </div>
                    </div>
                </div> 
            </div>        
        @endforeach
        {{$post->links()}}

    @else
        <p>No Post found</p>     
    @endif
    
@endsection