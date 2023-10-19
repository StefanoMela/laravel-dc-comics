@extends('layouts.app')

@section('main-content')
<div class="container d-flex flex-wrap justify-content-center">
    <h1 class="text-center my-3">Inserisci il tuo fumetto</h1>
    <div class="container">
        <form action="{{route('comics.store')}}" method="POST" class="row g-3">
            @csrf
            <div class="col-6">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" name="title" id="title">
            </div>
            <div class="col-6">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" name="series" id="series">
            </div>
            <div class="col-6">
                <label for="type" class="form-label">Tipo</label>
                <input type="text" class="form-control" name="type" id="type">
            </div>
            <div class="col-6">
                <label for="description" class="form-label">Descrizione</label>
                <input type="text" class="form-control" name="description" id="description">
            </div>
            <label for="price" class="form-label">Prezzo</label>
            <div class="input-group w-50">
                <span class="input-group-text">$</span>
                <input type="text" name="price" id="price" class="form-control">
                <span class="input-group-text">.00</span>
            </div>
            <button class="btn btn-primary">Salva</button>
        </form>
    </div> <a href="{{ route('comics.index') }}" class="btn btn-primary mt-5">Torna alla pagina principale</a>
</div>
@endsection