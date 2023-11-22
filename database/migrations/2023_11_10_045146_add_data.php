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
        
        DB::table('fournisseurs')->insert([
            ['id' => 1, 'nom' => 'Copag', 'ville' => 'Taroudant'],
            ['id' => 2, 'nom' => 'Central', 'ville' => 'Agadir'],
            ['id' => 3, 'nom' => 'Sidi Ali', 'ville' => 'Agadir'],
        ]);

        
        DB::table('articles')->insert([
            ['id' => 1, 'description' => 'Article 1', 'poids' => 200, 'couleur' => 'Vert', 'prix_achat' => 100.5, 'id_fournisseur' => 2],
            ['id' => 2, 'description' => 'Article 2', 'poids' => 300, 'couleur' => 'Vert', 'prix_achat' => 150.3, 'id_fournisseur' => 3],
            ['id' => 3, 'description' => 'Article 3', 'poids' => 300, 'couleur' => 'Bleu', 'prix_achat' => 200.5, 'id_fournisseur' => 2],
            ['id' => 4, 'description' => 'Article 4', 'poids' => 500, 'couleur' => 'Bleu', 'prix_achat' => 130, 'id_fournisseur' => 2],
            ['id' => 5, 'description' => 'Article 5', 'poids' => 550, 'couleur' => 'Violet', 'prix_achat' => 70, 'id_fournisseur' => 1],
        ]);
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
