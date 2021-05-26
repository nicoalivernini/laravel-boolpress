@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <a href="{{route('admin.posts.create')}}">Crea post</a>
    </div>
  </div>
    <div class="row justify-content-center">
      @foreach($posts as $post)
        <div class="col-md-3">
          <div class="card">
            <a href="{{route('admin.posts.show', ['post' => $post->slug])}}">
              <div class="card-header">{{ $post->title }}</div>

                <div class="card-body">
                  {{ $post->content }}
                  <div class="">
                    <a href="{{ route('admin.posts.edit', ['post' => $post->id])}}">Modifica</a>
                    <form class="form-delete" action="{{ route('admin.posts.destroy', ['post' => $post->id])}}" method="post">
                      @csrf
                      @method('DELETE')
                      <input type="submit" name="" value="Cancella">
                    </form>
                  </div>
                </div>
            </a>
          </div>
        </div>
      @endforeach
    </div>
</div>
@endsection
