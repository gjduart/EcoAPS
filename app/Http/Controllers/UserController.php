<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models\Receita;
use App\Models\Models\Despesa;
use App\Http\Controllers\ReceitaController;
use App\Http\Controllers\DespesaController;

class UserController extends Controller
{
    
     
     private $objDespesa;
     private $objReceita;
     public function __construct()
     {
 
 
     }
    public function index()
    {
    
     
       return view('login');
    
    }

    public function show($id)
    {
        

        
    }
 



}
