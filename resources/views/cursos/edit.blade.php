@extends('layouts.plantilla')
@section('title','Cursos edit')
@section('content')
    



    <h1>Editar un curso</h1>



    <form action="{{route('cursos.update',$curso)}}" method="POST">

        @csrf
        @method('put')
<label>Nombre
    <br>
    <input type="text" name="name" value="{{old('name', $curso->name )}}">
</label>
@error('name')
    {{$message}}
@enderror
<br>
<label>slug
    <br>
    <input type="text" name="slug" value="{{old('slug',$curso->slug)}}">
</label>
@error('slug')
    {{$message}}
@enderror
<br>
<label>Descripcion
    <br>
<textarea name="descripcion"  rows="5">{{old('descripcion',$curso->descripcion)}}</textarea>
</label>
@error('descripcion')
{{$message}}
@enderror

<label>
    <br>
    Categoria
    <br>
    <input type="text" name="categoria" value="{{old('categoria',$curso->categoria)}}">
</label>
@error('categoria')
    {{$message}}
@enderror
<br>
<button type="submit">actulizar formulario</button>
    </form>
@endsection