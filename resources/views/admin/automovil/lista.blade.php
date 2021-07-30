
@extends('layouts.plantilla')

@section('titulo','lista')

@section('contenido')
<div class="container">
    <div class="card-title">
        <h3>Automoviles</h3>
    </div>
    <div class="card-header">
        <a  class="btn btn-primary" href="{{route('automovil.create')}}">Agregar</a>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Marca</th>
                <th scope="col">Modelo</th>
                <th scope="col">Color</th>
                <th scope="col">Precio</th>
                <th scope="col">Matricula</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($automoviles as $a)
                    <tr>
                        <th scope="row">{{$a->id}}</th>
                        <td>{{$a->marca}}</td>
                        <td>{{$a->modelo}}</td>
                        <td>{{$a->color}}</td>
                        <td>{{$a->precio}}</td>
                        <td>{{$a->matricula}}</td>
                        <td>
                          <form action="{{route('automovil.destroy',$a->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="{{route('automovil.show',$a->id)}}" class="btn btn-primary">Ver</a>
                            <a href="{{route('automovil.edit',$a->id)}}" class="btn btn-success">Editar</a>
                            <input type="submit" value="eliminar" class="btn btn-danger">
                          </form>
                        </td>
                  </tr>

                @endforeach
              
            </tbody>
          </table>
    </div>
</div>



@endsection