@extends('layouts.app')

@section('main-content')
  <section class="container mt-5">
    <div class="card my-4">
      <div class="card-body text-center">
        <h5 class="card-title">{{ $comic->title }}</h5>
        <p class="card-text">{{ $comic->series }}</p>
        <p class="card-text">{{ $comic->sale_date }}</p>
        <p class="card-text">{{ $comic->type }}</p>
        <p class="card-text">{{ $comic->price }}</p>
        <p class="card-text">{{ $comic->description }}</p>
        <a class="btn btn-primary" href="{{route('comics.index')}}">Torna alla home page</a>
      </div>
    </div>
  </section>
@endsection
