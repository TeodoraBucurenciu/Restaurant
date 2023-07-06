<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        Schema::create('comanda', function (Blueprint $table) {
            $table->id();
            $table->integer('cantitate');
            $table->integer('id_comanda');
            $table->integer('id_produs');
            $table->integer('id_tip_produs');
            $table->integer('pretComanda');

            $table->l('pretComanda');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comanda');
    }
};
