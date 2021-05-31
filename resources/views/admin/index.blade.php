@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Dashboard') }}</div>

        <div class="card-body">
          @if (session('status'))
          <div class="alert alert-success" role="alert">
          {{ session('status') }}
          </div>
          @endif
          {{ __('Bentornato') }}
          <div class="links">
            <a href="{{route('admin.posts.index')}}"><button class="btn btn-primary">Entra e vedi tutti gli articoli</button></a>
            <a href="{{route('admin.categories.index')}}"><button class="btn btn-primary">Vedi le categorie</button></a>
            <a href="{{route('admin.tags.index')}}"><button class="btn btn-primary">Vedi i tags</button></a>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection
