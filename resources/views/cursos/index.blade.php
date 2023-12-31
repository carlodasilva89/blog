@extends('layouts.plantilla')

@section('title','Cursos create')

@section('content')

<h1>Bienvenido a la pagina principal del curso</h1>    
<a href="{{route('cursos.create')}}">crear curso</a>
<ul>
@foreach ($cursos as $curso )
<li>

<a href="{{route('cursos.show',$curso)}}">
    {{$curso->name}}

</a>


</li>
    
@endforeach

</ul>
{{$cursos->links()}}



