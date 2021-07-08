<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Despesa extends Model
{
    public $timestamps = false;
    protected $table='despesa';
    protected $fillable = ['id','valor','fonte','quando','pago','como_foi_pago','fixa'];
}
