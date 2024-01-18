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
        Schema::create('endereco', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 100)->unique()->nullable();
            $table->string('rua', 150)->nullable();
            $table->string('numero', 10)->nullable();
            $table->string('bairro', 150)->nullable();
            $table->string('cep', 9)->nullable( );
            $table->foreignId('cidade_id')->references('id')->on('cidade')->onDelete('CASCADE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('endereco');
    }
};
