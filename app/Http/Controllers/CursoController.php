<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCurso;
use App\Models\Curso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CursoController extends Controller
{



    public function index(){
        $cursos = Curso::orderBy('id','desc')-> paginate(); 
        return view('cursos.index',compact('cursos'));    }

    public function create(){
        return view('cursos.create');
    }

    public function store(StoreCurso $request)
    {
  
   

       

        $curso = new Curso();

        $curso ->name= $request->name;
        $curso ->descripcion= $request->descripcion;
        $curso ->categoria= $request->categoria;

        $curso->save();

        return Redirect()->route('cursos.show',$curso);

    }

public function show(Curso $curso){

         return view('cursos.show',compact('curso'));
    }

public function edit(Curso $curso){


return view('cursos.edit',compact('curso'));

}

public function update(Request $request ,Curso $curso){

    $this->validate($request, [
        'name' => 'required|min:3',
        'descripcion' => 'required',
        'categoria' => 'required'
     ]);
  
    $curso->name = $request ->name;
    $curso->descripcion = $request ->descripcion;
    $curso->categoria = $request ->categoria;

   $curso->save();
   return Redirect()->route('cursos.show',$curso);


}

    }
      

        


