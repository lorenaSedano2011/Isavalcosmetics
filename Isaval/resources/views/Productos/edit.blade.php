@extends('layouts.app')
@section('title', 'Editar Producto')
@section('contenido')
    <br>
    <div>
        <h3>Actualizar Producto</h3>
        <form action="/Productos" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{$productos->nombre}}">
                @error('nombre')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Cantidad</label>
                <input type="text" class="form-control" id="cantidad" name="cantidad" value="{{$productos->cantidad}}">
                @error('cantidad')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Valor</label>
                <input type="text" class="form-control" id="valor" name="valor" value="{{$productos->valor}}">
                @error('valor')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a class="btn btn-primary" href="{{ route('Productos.index') }}">Regresar</a>
        </form>
    </div>
@endsection
