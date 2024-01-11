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
        Schema::create('cliente_endereco', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cliente_id')->references('id')->on('cliente')->onDelete('CASCADE');
            $table->foreignId('endereco_id')->references('id')->on('endereco')->onDelete('CASCADE');
            $table->foreignId('cidade_id')->references('id')->on('cidade')->onDelete('CASCADE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cliente_endereco');
    }
};
