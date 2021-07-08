<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelBooksTable extends Migration
{

    public function up()
    {
        Schema::create('receita', function (Blueprint $table) {
            $table->id();
            $table->float('valor');
            $table->string('fonte');
            $table->boolean('recebido');
            $table->date('quando');
            $table->boolean('fixa');


        });


    }


    public function down()
    {
        Schema::dropIfExists('receita');
        
    }
}
