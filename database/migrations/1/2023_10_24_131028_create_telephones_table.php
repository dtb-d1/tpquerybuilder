<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('telephones', function (Blueprint $table) {
            $table->id();
            $table->integer('numero');
            $table->unsignedBigInteger('stagiaire_id'); 
            $table->foreign('stagiaire_id')->references('id')->on('stagiaires');
            $table->timestamps();
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('telephones');
    }
};
