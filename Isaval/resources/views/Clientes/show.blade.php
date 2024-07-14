@extends('layouts.app')
@section('title', 'mostrar cliente')
@section('contenido')
    <p />
    <p />
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mx-auto" style="width: 50%;">
                    <div class="card-header">
                        <h3>Datos del cliente</h3>
                    </div>
                    <div class="card-body">
                        <label>Documento: {{ $clientes->documento }}</label>
                    </div>
                    <div class="card-body">
                        <label>Nombre: {{ $clientes->nombre }}</label>
                    </div>
                    <div class="card-body">
                        <label>Edad: {{ $clientes->edad }}</label>
                    </div>
                    <div class="card-body">
                        <label> Correo: {{ $clientes->email }}</label>
                    </div>
                    <div class="card-body">
                        <a class="btn btn-primary" href="{{ route('Clientes.index') }}">Regresar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
