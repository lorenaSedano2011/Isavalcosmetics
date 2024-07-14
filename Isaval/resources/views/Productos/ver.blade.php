@extends('layouts.app')
@section('title', 'Listado de productos')
@section('contenido')

<h1 class="text-center p-3">Listado de Productos</h1>
<div class="p-5 table-responsive">
    <button type="button" class="btn btn-primary" onclick="window.location='{{ Route('Productos.create') }}'"><i class="fa-solid fa-square-plus"></i></button>
</p>
    <table class="table table-striped table-bordered table-hover">
        <thead class="bg-primary text-white">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Valor</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($RsProducto as $item )
            <tr>
                <th>{{$item->id}}</th>
                <td>{{$item->nombre}}</td>
                <td>{{$item->cantidad}}</td>
                <td>{{$item->valor}}</td>
                <td>
                    <a class="btn btn-info btn-sm shadow-none" title="Ver Producto" href="{{route('Productos.show',$item)}}"><i class="fa fa-book fa-fw text-white"></i></a>
                    <a class="btn btn-success btn-sm shadow-none" title="Editar producto" href="{{route('Productos.edit',$item)}}"> <i class="fa fa-pencil fa-fw text-white"></i></a></a>
                    <form action="{{ route('Productos.destroy', $item) }}" method="POST"  class="d-inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm shadow-none" title="Eliminar producto" onclick="return confirm('¿Estás seguro de eliminar?')"><i class="fa fa-trash-o fa-fw"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex Justify-content-center">
        {!! $RsProducto->links() !!}
    </div>
</div>
@endsection
