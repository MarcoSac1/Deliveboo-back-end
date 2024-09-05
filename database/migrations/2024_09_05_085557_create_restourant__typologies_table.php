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
        Schema::create('restourant__typologies', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('typology_id');
            $table->unsignedBigInteger('user_id');
            //
            $table->foreign('typology_id')->references('id')->on('typologies')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('restourant__typologies');
        // $table->dropForeign('restourant_typologies_typology_id_foreign');
    }
};
