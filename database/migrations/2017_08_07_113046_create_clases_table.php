<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clases', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->text('descripcion');
            $table->text('imginterna')->nullable();
            $table->text('imghome')->nullable();
            $table->text('info_gral')->nullable();
            $table->text('objetivos')->nullable();
            $table->text('modalidad')->nullable();
            $table->text('plan_estudio')->nullable();
            $table->text('contenidos_teoricos')->nullable();
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
        Schema::dropIfExists('clases');
    }
}
