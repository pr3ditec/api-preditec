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
        Schema::create('servico_endereco', function (Blueprint $table) {
            $table->id();
            $table->foreignId('endereco_id')->references('id')->on('endereco')->onDelete('CASCADE');
            $table->foreignId('servico_id')->references('id')->on('servico')->onDelete('CASCADE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servico_endereco');
    }
};
