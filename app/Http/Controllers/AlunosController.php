<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alunos;
class AlunosController extends Controller
{
    public function index(){
        $Alunos = Alunos::all();
        return view("alunos.listarAlunos", compact("Alunos"));
 
       

 
    }
    public function show(){
        
    }
    public function create(){

        $Alunos= Alunos::all();
      
        

    }
    public function store(Request $request){

       
       $a= new Alunos;
       $a-> name= $request->name;
       $a-> sexo= $request->sexo;
       $a-> data= $request->data;
       $a-> cidade= $request->cidade;
       $a-> bairro= $request->bairro;
       $a-> rua= $request->rua;
       $a-> numero= $request->numero;
       $a-> complemento= $request->complemento;
       $a->save();


       return view('home');

    }
    public function edit(){
        
    }
    public function update(){
        
    }
    public function delete(){
        
    }

}
