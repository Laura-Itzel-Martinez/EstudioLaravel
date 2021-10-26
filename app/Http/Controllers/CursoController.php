<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personas;

class CursoController extends Controller
{
    public function index(){
        $curso=Personas::orderBy('id', 'desc')->paginate();

        return view('index', compact('curso'));
    }
    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $curso=new Personas();

        $curso->nombre=$request->nombre;
        $curso->apellido=$request->apellido;
        $curso->categoria=$request->categoria;
        
        $curso->save();
        return redirect()->route('show',$curso);
    }

    public function show(Personas $curso){
        
        return view('show', compact('curso'));
    }
    public function edit(Personas $curso){
        return view('edit', compact('curso'));
       
    }
     public function update(Request $request , Personas $curso){
        
        $curso->nombre=$request->nombre;
        $curso->apellido=$request->apellido;
        $curso->categoria=$request->categoria;

        $curso->save();
        return redirect()->route('show',$curso); 
    }
}
