<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Discipline;

class AjustesController extends Controller
{
    public function index() {
    	return view('index');
    }

    public function ajustar(Discipline $disciplines) {
    	$disciplines = $disciplines->all();

    	//Mostrar grupo de seleção de disciplinas
    	return view('ajuste.show', compact('disciplines'));
 
    }

    public function mostrar() {
    	return view('consulta.show');
    }

    public function buscarDisciplinas(Request $request) {
    	$disciplinas = Discipline::where('periodo', '=', $request->input('periodo'))->get();
    	
    	return response()->json($disciplinas);


    	//return $disciplinas;
    
    }
    public function processarRequerimento() {
        //
    }


}
