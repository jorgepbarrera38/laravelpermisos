@extends('layouts.main')
@section('content')
    <div class="card">
        <div class="card-header">
            Productos
            <a href="{{ route('products.create') }}" class="btn btn-success float-right">
                Nuevo
            </a>
        </div>
        <div class="card-body">
            <table class="table table-hover table-sm">
                <thead>
                    <th>Nombre</th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->name }}</td>
                            <td>
                                <a href="{{ route('products.edit', $product->id) }}" 
                                    class="btn btn-warning btn-sm">
                                    Editar
                                </a>

                                <a href="javascript:document.getElementById('delete-{{ $product->id }}').submit()" 
                                    class="btn btn-danger btn-sm">
                                    Eliminar
                                </a>
                                <form id="delete-{{ $product->id }}" action="{{ route('products.destroy', $product->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection