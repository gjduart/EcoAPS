<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models\Receita;
use App\Models\Models\Despesa;
class DespesaController extends Controller
{
     private $objDespesa;
     private $objReceita;
     public function __construct()
     {
         $this->objDespesa = new Despesa();
         $this->objReceita = new Receita();
     }
    public function index()
    {
       $despesa = $this-> objDespesa->all();
       $receita = $this-> objReceita->all();
       return view('index', compact('despesa','receita'));
       #dd($this->objDespesa->find(1));
    }

 
    public function create()
    {
        $despesa = $this-> objDespesa->all();
        return view('createDespesa', compact('despesa'));
    }

  
    public function store(Request $request)
    {
        $this->objDespesa->create([
            'id'=>$request->id,
            'valor'=> $request->valor,
            'fonte'=>$request->fonte,
            'quando'=>$request->quando,
            'pago' => $request -> pago,
            'como_foi_pago' => $request->como_foi_pago ,
            'fixa'=>$request->fixa

        ]);
        return redirect('/index');
    }

 
    public function show($id)
    {
        $despesa = $this->objDespesa->find($id);
        return view('view', compact('despesa'));
        
    }

 
 
    public function edit($id)
    {
        $despesa = $this-> objDespesa->find($id);
        return view('editDespesa',compact('despesa'));
    }

    public function update(Request $request, $id)
    {
        $this->objDespesa->where(['id'=>$id])->update([
            'id'=>$request->id,
            'valor'=> $request->valor,
            'fonte'=>$request->fonte,
            'quando'=>$request->quando,
            'pago' => $request -> pago,
            'como_foi_pago' => $request->como_foi_pago ,
            'fixa'=>$request->fixa
        ]);
        return redirect('/index');
    }

   
    public function destroy($id)
    {
       $del=$this->objDespesa->destroy($id);
       return($del)?"sim":"não";
    }
}
