<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
class CategoriaController extends Controller
{
    public function index(){
        $categorias = Categoria::all();
        return view('categoria.index')->with('categorias',$categorias) ;

    }
    public function create(){

        return view('categoria.create');
    }




    public function insert(Request $request){

$categoria= new Categoria();
$categoria->libro=$request->libro;
$categoria->descripcion=$request->descripcion;
$categoria->precio=$request->precio;
$categoria->imagen=$request->imagen;
$categoria->estado=1;
$categoria->save();
return redirect('categorias');

    }
    public function edit($id){

       $categoria= Categoria::find($id);
       return view('categoria.edit')->with('categoria',$categoria);

    }

    public function update(Request  $request, $id){

        $categoria= Categoria::find($id);
        $categoria->libro = $request->libro;
        $categoria->descripcion = $request->descripcion;
        $categoria->precio = $request->precio;
        $categoria->imagen = $request->imagen;
        $categoria->save();

        return redirect('/categorias');
    }

    public function delete(Request  $request, $id){

        $categoria= Categoria::find($id);
        $categoria->delete();

        return redirect('/categorias');
    }

    public function libro(){
       $categorias=Categoria::all();
        return view('categoria.libro1')->with('categorias',$categorias) ;


    }
}
