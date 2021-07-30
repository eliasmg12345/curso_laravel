@extends('layouts.plantilla')
@section('titulo','Crear')

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
            <form action="{{route('automovil.store')}}" method="POST">
                {{--Token para seugridad en formularios--}}
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Marca</label>
                    <input type="text" name="marca" id="" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Modelo</label>
                    <input type="text" name="modelo" id="" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Color</label>
                    <input type="text" name="color" id="" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Precio</label>
                    <input type="text" name="precio" id="" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Matricula</label>
                    <input type="text" name="matricula" id="" class="form-control">
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary mb-3" type="submit">Registrar</button>
                </div>
            </form>
        </div>
    </div>
@endsection