<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up()
    {
        Schema::create('filiere_module', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('filiere_id');
            $table->unsignedBigInteger('module_id');
            $table->timestamps();
        });
    }
    

    
    public function down(): void
    {
        Schema::dropIfExists('filiere_module');
    }
};
