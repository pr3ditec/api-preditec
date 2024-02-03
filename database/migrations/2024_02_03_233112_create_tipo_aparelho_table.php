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
        Schema::create('tipo_aparelho', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 150);
            $table->string('modelo', 50);
            $table->foreignId('usuario_id')->references('id')->on('usuario')->onDelete('CASCADE');
            $table->boolean('ativo')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipo_aparelho');
    }
};
