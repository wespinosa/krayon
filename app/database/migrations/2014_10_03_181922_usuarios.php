<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Usuarios extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            Schema::table ('usuarios',function($table){
                $table->create();
                $table->increments('codigo');
                $table->string('nombre',60);
                $table->string('apellido',60);
                $table->string('usuario',60);
                $table->string('password');
                $table->integer('tipo');
                $table->string('direccion',200);
                $table->string('telefono',13);
                $table->string('estado',2);
                
                $table->timestamps();
            });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('usuarios');
	}

}
