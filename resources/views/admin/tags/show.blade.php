@extends('layouts.app')


@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2>{{ $tag->name }}</h2>
    </div>
  </div>
  <a href="{{route('admin.tags.index')}}">Torna Indietro</a>
</div>

@endsection
