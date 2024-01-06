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
            $table->string('nome', 100)->unique();
            $table->string('rua', 150);
            $table->string('numero', 10);
            $table->string('bairro', 150);
            $table->string('cep', 9);
            $table->decimal('latitude', 10,8)->nullable();
            $table->decimal('longitude', 10,8)->nullable();
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
