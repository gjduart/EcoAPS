<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receita extends Model
{
    public $timestamps = false;
    protected $table='receita';
    protected $fillable = ['valor','fonte','recebido','quando','fixa','id'];

  

}
