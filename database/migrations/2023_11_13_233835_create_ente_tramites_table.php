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
        Schema::create('ente_tramites', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('descripcion');
            $table->integer('total_ut');
            $table->foreignId('concepto_tributo_id')
                ->nullable()
                ->constrained('concepto_tributos')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            // $table->foreignId('id_estandar_doc')
            //     ->nullable()
            //     ->constrained('estandarizacion_docs')
            //     ->cascadeOnUpdate()
            //     ->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ente_tramites');
    }
};