@extends('layouts.main')
@section('content')
    <div class="card">
        <div class="card-header">
            Nuevo producto
        </div>
        <div class="card-body">
            @include('partials.messages')
            <form action="{{ route('products.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">Nombre</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                </div>
                <button class="btn btn-primary" type="submit">Guardar</button>
                <a href="{{ route('products.index') }}" class="btn btn-danger">
                    Cancelar
                </a>
            </form>
        </div>
    </div>
@endsection