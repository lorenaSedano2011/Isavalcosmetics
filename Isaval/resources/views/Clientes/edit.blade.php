@extends('layouts.app')
@section('title', 'Actualizar cliente')
@section('contenido')
    <br>
    <div>
        <h3>Actualizar clientes</h3>
        <form action="{{route('Clientes.update',$clientes)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{$clientes->nombre}}">
                @error('nombre')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Documento</label>
                <input type="text" class="form-control" id="documento" name="documento" value="{{$clientes->documento}}" disabled>
                @error('documento')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">edad</label>
                <input type="text" class="form-control" id="edad" name="edad" value="{{$clientes->edad}}">
                @error('edad')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">email</label>
                <input type="text" class="form-control" id="email" name="email" value="{{$clientes->email}}">
                @error('email')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                @enderror
            </div>
            <button type="submit" class="btn btn-success">Actualizar</button>
            <a class="btn btn-primary" href="{{ route('Clientes.index') }}">Regresar</a>
        </form>
    </div>
@endsection
