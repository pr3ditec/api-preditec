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
        Schema::create('cliente', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 100)->unique();
            $table->boolean('ativo')->default(1);
            $table->foreignId('status_cliente_id')->references('id')->on('status_cliente')->onDelete('CASCADE');
            $table->foreignId('usuario_id')->references('id')->on('usuario')->onDelete('CASCADE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cliente');
    }
};
