<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Turmas;
class TurmaController extends Controller
{
    public function index(){
     
    }
    public function show(){
        
    }
    public function create(){

        $turmas= Turmas::all();
        return view('/CadTurma');
        

    }
    public function store(Request $request){
        //dd($request);
        $t= new Turmas;
        $t-> descricao= $request->descricao;
        $t-> vagas= $request->vagas;
        $t-> professor= $request->professor;
        $t->save();        
      
       
       return view('home');
    }
    public function edit(){
        
    }
    public function update(){
        
    }
    public function delete(){
        
    }

}

