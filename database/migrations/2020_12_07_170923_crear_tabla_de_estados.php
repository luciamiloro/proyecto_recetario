<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaDeEstados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('users', function (Blueprint $table) {
           $table->id();
           $table->string("usuario", 100);
           $table->string("valoracion", 100);
           $table->string("persona", 100);
           $table->string("ingrediente");
           $table->string("restriccion");
           $table->string("restriccion_del_ingrediente");
           $table->string("receta");
           $table->string("recetas_favoritas");
           $table->string("despensa");
           $table->timestamps();
       }); //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
