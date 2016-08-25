<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatalogacaoTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('catalogacao', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nome_especie',255);
            $table->string('nome_vernaculare',255);
            $table->string('area_coleta_amostra');
            $table->string('n_fixa_coleta');
            $table->string('parte_coletata');
            $table->string('n_tombamento');
            $table->string('caract_botanica');
            $table->string('Infor_etnofarmacologica');
            $table->string('Infor_etnobotanicas');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

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
		Schema::drop('catalogacao');
	}

}
