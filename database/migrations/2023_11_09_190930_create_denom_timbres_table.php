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
        Schema::create('denom_timbres', function (Blueprint $table) {
            $table->id();
            $table->integer('cant_ut');
            $table->text('img');
            $table->enum('tipo', ['fisico', 'electronico']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('denom_timbres');
    }
};
