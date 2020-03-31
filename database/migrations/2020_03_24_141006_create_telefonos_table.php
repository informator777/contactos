<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTelefonosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telefonos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('ci')->nullable();
            $table->string('extension');
            $table->string('telefono_movil')->nullable();
            $table->string('telefono_fijo')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('telefonos');
    }
}
