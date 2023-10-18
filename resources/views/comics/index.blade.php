@extends('layouts.app')

@section('main-content')
  <section class="container mt-5">
    <h1>{{ $title }}</h1>
    @foreach ($comics as $comic)
    <div class="card" class="h-100">
      <div class="card-body">
        <h5 class="card-title">{{ $comic->title }}</h5>
        <p class="card-text">{{ $comic->series }}</p>
        <p class="card-text">{{ $comic->sale_date }}</p>
        <p class="card-text">{{ $comic->type }}</p>
        <p class="card-text">{{ $comic->price }}</p>
      </div>
    </div>
    @endforeach
  </section>
@endsection
