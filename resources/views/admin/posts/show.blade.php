@extends('layouts.app')


@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2>{{ $post->title }}</h2>
    </div>
    <div class="col-md-12">
      <h4>{{ $post->content }}</h4>
    </div>
    <div class="col-md-12">
      <h6>Category:
        @if ($post->category)
        <a href="{{route('category.index', ['slug' => $post->category->slug])}}">{{ $post->category->name }}</a>
        @endif
      </h6>
    </div>

    <div class="col-md-12">
      @foreach($post->tags as $tag)
      <h6>Tag:
      <a href="{{ route('tag.index', ['slug' => $tag->slug])}}">#{{$tag->name}}</a></h6>
      @endforeach
    </div>
    
    <div class="col-md-12">
      <img src="{{asset('storage/'.$post->cover)}}" alt="{{$post->title}}">
    </div>
  </div>
  <a href="{{route('admin.posts.index')}}"><button class="btn btn-primary">Torna indietro</button></a>
</div>

@endsection
