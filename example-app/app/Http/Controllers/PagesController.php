<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nota;
class PagesController extends Controller
{
    public function index(){
        $notas = Nota::all();
        return view('welcome',compact('notas'));
    }
    public function galeria(){
        return view('fotos');
    }
    public function noticias(){
        return view('blog');
    }
    public function nosotros($nombre = null){
        $equipo= ['ignacio', 'camilo', 'pedro'];

        //return view('nosotros',['equipo' => $equipo]);
        return view('nosotros',compact('equipo','nombre'));
    }
}
