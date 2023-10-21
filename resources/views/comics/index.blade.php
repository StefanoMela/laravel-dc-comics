@extends('layouts.app')

@section('main-content')
  <section class="container mt-5">
    <h1>{{ $title }}</h1>
    <a href="{{ route('comics.create') }}" class="btn btn-primary">Crea il tuo fumetto!</a>
    @foreach ($comics as $comic)
    <div class="card my-4 h-100">
      <div class="card-body text-center">
        <h5 class="card-title">{{ $comic->title }}</h5>
        <img src="{{$comic->thumb}}" class="col-3" alt="">
        <p class="card-text"><strong>Serie: </strong>{{ $comic->series }}</p>
        <p class="card-text"><strong>Prima Uscita: </strong>{{ $comic->sale_date }}</p>
        <p class="card-text"><strong>Tipo: </strong>{{ $comic->type }}</p>
        <p class="card-text"><strong>Prezzo: </strong>{{ $comic->price }}</p>
        <p class="card-text"><strong>Descrizione: </strong>{{ $comic->description }}</p>
        <a class="btn btn-primary" href="{{route('comics.show', $comic)}}">Dettagli</a>
        <a class="btn btn-warning" href="{{route('comics.edit', $comic)}}">Modifica</a>
        @include('partials._modal')
      </div>
    </div>
    @endforeach
    {{$comics->links('pagination::bootstrap-5')}}
  </section>
@endsection