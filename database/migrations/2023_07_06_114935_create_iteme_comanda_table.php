<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
            Schema::create('iteme_comanda', function (Blueprint $table) {
            $table->id();
            $table->integer('cantitate');
            $table->unsignedBigInteger('id_produs');
            $table->foreign('id_produs')->references('id')->on('produse')->cascadeOnDelete('cascade')->cascadeOnUpdate('cascade');
            $table->unsignedBigInteger('id_comanda');
            $table->foreign('id_comanda')->references('id')->on('comenzi')->cascadeOnDelete('cascade')->cascadeOnUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('iteme_comanda', function (Blueprint $table) {
          $table->dropForeign('iteme_comanda_id_produs_foreign');
          $table->dropForeign('iteme_comanda_id_comanda_foreign');
        });
        Schema::dropIfExists('iteme_comanda');
    }
};
