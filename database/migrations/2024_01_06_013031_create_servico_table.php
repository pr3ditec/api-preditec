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
        Schema::create('servico', function (Blueprint $table) {
            $table->id();
            $table->string('ordem_servico', 10);
            $table->string('observacao', 150)->nullable();
            $table->date('data_servico')->nullable();
            $table->foreignId('aparelho_id')->references('id')->on('aparelho')->onDelete('CASCADE');
            $table->foreignId('status_servico_id')->references('id')->on('status_servico')->onDelete('CASCADE');
            $table->foreignId('cliente_id')->references('id')->on('cliente')->onDelete('CASCADE');
            $table->foreignId('usuario_id')->references('id')->on('usuario')->onDelete('CASCADE');
            $table->foreignId('pagamento_id')->references('id')->on('pagamento')->onDelete('CASCADE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servico');
    }
};
