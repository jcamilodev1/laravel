<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nota;
class PagesController extends Controller
{
    public function index(){
        // $notas = Nota::all();  // se usa para traer todos los datos
        $notas = Nota::paginate(1); // se usa para traer solo un numero de datos y generar una paginacion

        return view('welcome',compact('notas'));
    }
    public function detalle($id){
        $nota = Nota::findOrFail($id);
        return view('notas.detalle',compact('nota'));
    }

    public function crear(Request $request){
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required'
        ]);
        
        $notaNueva = new Nota;
        $notaNueva->nombre = $request->nombre;
        $notaNueva->descripcion = $request->descripcion;

        $notaNueva->save();

        return back()->with('mensaje', 'Nota agregada');
    }

    public function editar($id){
        $nota = Nota::findOrFail($id);
        return view('notas.editar',compact('nota'));
    }
    public function update(Request $request, $id){
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required'
        ]);
        $notaUpdate = Nota::findOrFail($id);
        $notaUpdate->nombre = $request->nombre;
        $notaUpdate->descripcion = $request->descripcion;
        $notaUpdate->save();
        return back()->with('mensaje', 'Nota actulizada');

    }
    public function eliminar($id){
        $notaEliminar = Nota::findOrFail($id);
        $notaEliminar->delete();
        return back()->with('mensaje', 'Nota eliminada');
    }
}
