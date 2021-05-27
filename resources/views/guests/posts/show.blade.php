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
      <h6>Category: <a href="{{route('category.index', ['slug' => $post->category->slug])}}"> {{ $post->category->name }}</a></h6>
    </div>
  </div>
  <a href="{{route('posts.index')}}">Torna Indietro</a>
</div>

@endsection
