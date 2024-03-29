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
        Schema::create('usuario', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 100);
            $table->string('email', 100)->unique();
            $table->string('senha', 100);
            $table->foreignId('tipo_usuario_id')->references('id')->on('tipo_usuario')->onDelete('CASCADE');
            $table->foreignId('status_usuario_id')->references('id')->on('status_usuario')->onDelete('CASCADE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuario');
    }
};
