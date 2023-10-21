@extends('layouts.app')

@section('main-content')
  <section class="container mt-5 text-center">
    <h1 class="my-5">{{ $title }}</h1>
    <a href="{{route('comics.index')}}" class="btn btn-primary">Vai ai fumetti</a>
  </section>
@endsection
