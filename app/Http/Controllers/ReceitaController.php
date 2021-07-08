<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models\Receita;

class ReceitaController extends Controller
{
    
     private $objReceita;

     public function __construct()
     {
         $this->objReceita = new Receita();
     }
    public function index()
    {
       $receita = $this-> objReceita->all();
       return view('index/receita', compact('receita'));
       
    }

 
    public function create()
    {
        $receita = $this-> objReceita->all();
        return view('createReceita', compact('receita'));
    }

  
    public function store(Request $request)
    {
        $this->objReceita->create([
            'id'=>$request->id,
            'valor'=> $request->valor,
            'fonte'=>$request->fonte,
            'recebido'=>$request->recebido,
            'quando'=>$request->quando,
            'fixa'=>$request->fixa
        ]);
        return redirect('/index');
    }

 
    public function show($id)
    {

        $receita = $this-> objReceita->find($id);
        return view('/index/receita/viewreceita', compact('receita'));
        
    }

 
 
    public function edit($id)
    {
        $receita = $this-> objReceita->find($id);
        return view('editReceita',compact('receita'));
    }



    public function update(Request $request, $id)
    {
        $this->objReceita->where(['id'=>$id])->update([
            'id'=>$request->id,
            'valor'=> $request->valor,
            'fonte'=>$request->fonte,
            'recebido'=>$request->recebido,
            'quando'=>$request->quando,
            'fixa'=>$request->fixa
        ]);
        return redirect('/index');
    }

   
    public function destroy($id)
    {
        $del=$this->objReceita->destroy($id);
       return($del)?"sim":"não";
    }
}
