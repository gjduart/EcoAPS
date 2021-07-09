<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDespesasTable extends Migration
{

    public function up()
    {
        Schema::create('despesa', function (Blueprint $table) {
            $table->id();
            $table->float('valor');
            $table->string('fonte');
            $table->date('quando');
            $table->boolean('pago');
            $table->string('como_foi_pago');
            $table->boolean('fixa');

        });
    }


    public function down()
    {
        Schema::dropIfExists('despesa');
    }
}
