@extends('layouts.plantilla')

@section('titulo','mostrar')

@section('contenido')
<div class="container">
    <div class="header">
        <h2>Datos del automovil{{$automovil->marca}}</h2>
    </div>
    <div class="card-body">
        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th colspan="6">Datos del automovil {{$automovil->marca}}</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="col">marca: </th>
                    <td>{{$automovil->marca}}</td>
                    
                    <th scope="col">modelo: </th>
                    <td>{{$automovil->modelo}}</td>
                </tr>
                <tr>
                    <th scope="col">color: </th>
                    <td>{{$automovil->color}}</td>
                    
                    <th scope="col">precio: </th>
                    <td>{{$automovil->precio}}</td>

                </tr>
                <tr>
                    
                    <th scope="col">matricula: </th>
                    <td>{{$automovil->matricula}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>



@endsection