@extends('layouts.app')

@section('main-content')
<div class="container d-flex flex-wrap justify-content-center">
    <h1 class="text-center my-3">Inserisci il tuo fumetto</h1>
    @include('partials._form')
    <a href="{{ route('comics.index') }}" class="btn btn-primary mt-5">Torna alla pagina principale</a>
</div>
@endsection