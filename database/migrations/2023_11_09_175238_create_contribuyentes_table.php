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
        Schema::create('contribuyentes', function (Blueprint $table) {
            $table->id();
            $table->integer('cedula');
            $table->enum('prefijo', ['V', 'E', 'J', 'G']);
            $table->unique(['prefijo', 'cedula']);
            $table->string('nombre');
            $table->string('apellido');
            $table->text('direccion');
            $table->string('telefono');
            $table->date('fecha_nac');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contribuyentes');
    }
};
