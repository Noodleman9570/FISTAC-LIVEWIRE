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
        Schema::create('permisos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_rol')
                ->nullable()
                ->constrained('roles')
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->foreignId('id_modulo')
                ->nullable()
                ->constrained('modulos')
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
        Schema::dropIfExists('permisos');
    }
};
