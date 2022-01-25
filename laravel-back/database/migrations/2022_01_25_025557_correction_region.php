<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CorrectionRegion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //renombramos la columna REG_ID de la tabla pt_regiones a id
        Schema::table('pt_regions', function (Blueprint $table) {
            $table->renameColumn('REG_ID', 'id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //revertimos cambio
        Schema::table('pt_regions', function (Blueprint $table) {
            $table->renameColumn('id', 'REG_ID');
        });
    }
}
