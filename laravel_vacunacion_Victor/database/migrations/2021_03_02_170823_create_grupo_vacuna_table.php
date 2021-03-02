<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGrupoVacunaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupo_vacuna', function (Blueprint $table) {
            $table->bigInteger("grupo_id");
            $table->bigInteger("vacuna_id");
            $table->primary(array("grupo_id","vacuna_id"));
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
        Schema::dropIfExists('grupo_vacuna');
    }
}
