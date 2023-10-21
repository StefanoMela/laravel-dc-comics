@extends('layouts.app')

@section('main-content')
<div class="container d-flex flex-wrap justify-content-center">
    <h1 class="text-center my-3">Inserisci il tuo fumetto</h1>
    <div class="container">
        @if ($errors->any())
        <div class="alert alert-danger">
            <h4>correggi i seguenti errori</h4>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{route('comics.store')}}" method="POST" class="row g-3">
            @csrf
            <div class="col-6">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" value="{{old('title')}}">
                @error('title')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="col-6">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control @error('series') is-invalid @enderror" name="series" id="series" value="{{old('series')}}">
                @error('series')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="col-6">
                <label for="type" class="form-label">Tipo</label>
                <input type="text" class="form-control @error('type') is-invalid @enderror" name="type" id="type" value="{{old('type')}}">
                @error('type')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="col-6">
                <label for="description" class="form-label">Descrizione</label>
                <input type="text" class="form-control @error('description') is-invalid @enderror" name="description" id="description" value="{{old('description')}}">
                @error('description')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <label for="price" class="form-label">Prezzo</label>
            <div class="input-group w-50">
                <span class="input-group-text">$</span>
                <input type="text" name="price" id="price" class="form-control @error('price') is-invalid @enderror" value="{{old('price')}}">
                @error('price')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
                <span class="input-group-text">.00</span>
            </div>
            <button class="btn btn-primary">Salva</button>
        </form>
    </div> <a href="{{ route('comics.index') }}" class="btn btn-primary mt-5">Torna alla pagina principale</a>
</div>
@endsection