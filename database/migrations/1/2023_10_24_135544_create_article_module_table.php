<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up()
{
    Schema::create('article_module', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('stagiaire_id');
        $table->unsignedBigInteger('module_id');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('article_module');
    }
};
