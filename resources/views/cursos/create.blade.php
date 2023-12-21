<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>en esta pagina podras crear un curso</h1>



    <form action="{{route('cursos.store')}}" method="POST">

        @csrf

<label>Nombre
    <br>
    <input type="text" name="name" value="{{old('name')}}">
</label>
@error('name')
    {{$message}}
@enderror
<br>
<label>Descripcion
    <br>
<textarea name="descripcion"  rows="5">{{old('descripcion')}}</textarea>
</label>
@error('descripcion')
    {{$message}}
@enderror
<label>
    <br>
    Categoria
    <br>
    <input type="text" name="categoria" value="{{old('categoria')}}">
</label>
@error('categoria')
    {{$message}}
@enderror
<br>
<button type="submit">Enviar Formulario</button>
    </form>
</body>
</html>