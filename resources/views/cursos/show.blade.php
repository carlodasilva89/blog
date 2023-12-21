
@extends('layouts.plantilla')

@section('title','Curso '. $curso->name)

@section('content')

<h1>bienvenido al curso {{ $curso->name}}</h1> 

<a href=" {{route('cursos.index')}} ">volver a cursos</a>
<br>


<br>

<a href="{{route('cursos.edit',$curso)}}">Editar curso</a>

<p><strong>Categoria: </strong>{{$curso->categoria}}</p>
<p> {{$curso->descripcion}} </p>

@endsection

