@extends('layouts.plantilla')
@section('titulo','Editar')

@section('contenido')
    <div class="container">
        <div class="card-title">
            <span><h1>Registro de Automoviles</h1></span>
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{route('automovil.update',$automovil->id)}}" method="POST">
                {{--Token para seugridad en formularios--}}
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="" class="form-label">Marca</label>
                    <input type="text" name="marca" value="{{$automovil->marca}}" id="" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Modelo</label>
                    <input type="text" name="modelo" value="{{$automovil->modelo}}" id="" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Color</label>
                    <input type="text" name="color" value="{{$automovil->color}}" id="" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Precio</label>
                    <input type="text" name="precio" value="{{$automovil->precio}}" id="" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Matricula</label>
                    <input type="text" name="matricula" value="{{$automovil->matricula}}" id="" class="form-control">
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary mb-3" type="submit">Editar</button>
                </div>
            </form>
        </div>
    </div>
@endsection