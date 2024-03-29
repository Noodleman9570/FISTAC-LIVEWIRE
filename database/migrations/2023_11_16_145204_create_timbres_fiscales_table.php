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
        Schema::create('timbres_fiscales', function (Blueprint $table) {
            $table->id();
            $table->enum('status', ['generado', 'asignado', 'anulado', 'empleado']);
            $table->foreignId('denominacion_id')
                ->nullable()
                ->constrained('denom_timbres')
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->foreignId('tramite_id')
                ->nullable()
                ->constrained('tramites')
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
        Schema::dropIfExists('timbres_fiscales');
    }
};
