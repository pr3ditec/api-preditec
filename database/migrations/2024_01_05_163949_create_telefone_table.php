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
        Schema::create('telefone', function (Blueprint $table) {
            $table->id();
            $table->string('numero', 100)->unique();
            $table->foreignId('tipo_telefone_id')->references('id')->on('tipo_telefone')->onDelete('CASCADE');
            $table->boolean('ativo')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('telefone');
    }
};
