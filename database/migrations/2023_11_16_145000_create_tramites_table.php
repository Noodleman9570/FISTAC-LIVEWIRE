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
        Schema::create('tramites', function (Blueprint $table) {
            $table->id();
            $table->text('descripcion');
            $table->foreignId('id_contribuyente')
                ->nullable()
                ->constrained('contribuyentes')
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->foreignId('id_ente_tramite')
                ->nullable()
                ->constrained('ente_tramites')
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
        Schema::dropIfExists('tramites');
    }
};
