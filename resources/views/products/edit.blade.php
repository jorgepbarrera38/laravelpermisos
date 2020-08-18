@extends('layouts.main')
@section('content')
    <div class="card">
        <div class="card-header">
            Editar producto
        </div>
        <div class="card-body">
            @include('partials.messages')
            <form action="{{ route('products.update', $product->id) }}" method="POST">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="">Nombre</label>
                    <input type="text" name="name" class="form-control" value="{{ $product->name }}">
                </div>
                <button class="btn btn-primary" type="submit">Guardar</button>
                <a href="{{ route('products.index') }}" class="btn btn-danger">
                    Cancelar
                </a>
            </form>
        </div>
    </div>
@endsection