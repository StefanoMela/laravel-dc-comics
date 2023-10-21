@extends('layouts.app')

@section('main-content')
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
    <form action="{{route('comics.update', $comic)}}" method="POST" class="row g-3">
        @csrf
        @method('PUT')
        <div class="col-6">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" name="title" id="title" value="{{old('title') ?? $comic->title}}">
            @error('title')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="col-6">
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control" name="series" id="series" value="{{old('series') ?? $comic->series}}">
            @error('series')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="col-6">
            <label for="type" class="form-label">Tipo</label>
            <input type="text" class="form-control" name="type" id="type" value="{{old('type') ?? $comic->type}}">
            @error('type')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="col-6">
            <label for="description" class="form-label">Descrizione</label>
            <input type="text" class="form-control" name="description" id="description" value="{{old('description') ?? $comic->description}}">
            @error('description')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <label for="price" class="form-label">Prezzo</label>
        <div class="input-group w-50">
            <span class="input-group-text">$</span>
            <input type="text" name="price" id="price" class="form-control" value="{{old('price') ?? $comic->price}}">
            @error('price')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
            <span class="input-group-text">.00</span>
        </div>
        <button class="btn btn-success w-50">Salva</button>
    </form>
    <a class="btn btn-primary my-5 w-20" href="{{route('comics.index')}}">Torna alla home page</a>
</div>
@endsection