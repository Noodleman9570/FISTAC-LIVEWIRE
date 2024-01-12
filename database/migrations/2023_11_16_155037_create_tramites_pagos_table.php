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
        Schema::create('tramites_pagos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tramite_id')
                ->nullable()
                ->constrained('tramites')
                ->cascadeOnUpdate()
                ->nullOnDelete();
            // $table->foreignId('pago_id')
            //     ->nullable()
            //     ->constrained('pagos')
            //     ->cascadeOnUpdate()
            //     ->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tramites_pagos');
    }
};
