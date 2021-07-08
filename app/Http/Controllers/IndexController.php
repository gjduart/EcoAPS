<?php

namespace App\Http\Controllers;


use App\Models\Models\Receita;
use App\Models\Models\Despesa;


class IndexController extends Controller
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
     
    }

    public function show($id)
    {
        $receita = $this->objReceita->find($id);
        $despesa = $this->objDespesa->find($id);
   
        return view('view', compact('receita','despesa'));
        
    }
 



}
