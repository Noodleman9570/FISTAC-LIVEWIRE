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
        Schema::create('pagos', function (Blueprint $table) {
            $table->id();
            $table->string('num_cuenta');
            $table->string('referencia');
            $table->string('monto');
            $table->foreignId('cod_banco')
                ->nullable()
                ->references('cod_banco')
                ->on('bancos')
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->foreignId('id_tipo_pago')
                ->nullable()
                ->constrained('tipo_pagos')
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pagos');
    }
};
