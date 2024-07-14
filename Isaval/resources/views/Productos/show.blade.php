@extends('layouts.app')
@section('title', 'mostrar producto')
@section('contenido')
    <p />
    <p />
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mx-auto" style="width: 50%;">
                    <div class="card-header">
                        <h3>Datos del producto</h3>
                    </div>
                    <div class="card-body">
                        <label>Nombre: {{ $productos->nombre }}</label>
                    </div>
                    <div class="card-body">
                        <label>Cantidad: {{ $productos->cantidad }}</label>
                    </div>
                    <div class="card-body">
                        <label>Valor: {{ $productos->valor }}</label>
                    </div>
                    <div class="card-body">
                        <a class="btn btn-primary" href="{{ route('Productos.index') }}">Regresar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
