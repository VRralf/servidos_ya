<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComandasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comandas', function (Blueprint $table) {
            $table->id();

            $table->date('fecha');
            $table->time('horainicio');
            $table->time('horafin');
            $table->foreignId('idmesa')
                ->constrained('mesas')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('idusuario')
                ->constrained('usuarios')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->float('importetotal','8','2');
            $table->boolean('pagado');

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
        Schema::dropIfExists('comandas');
    }
}
