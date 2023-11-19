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
        Schema::create('espdata', function (Blueprint $table) 
        {

            $table->id();
            $table->string('nome_arq');
            $table->float('tempo_exec'); 
            $table->timestamp('data_exec')->useCurrent();
            

            
            $table->index('nome_arq');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('espdata');
    }
};
