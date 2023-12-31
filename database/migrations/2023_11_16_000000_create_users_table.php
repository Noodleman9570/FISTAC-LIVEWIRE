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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->foreignId('id_oficina')
                ->nullable()
                ->constrained('oficinas')
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->foreignId('id_contribuyente')
                ->nullable()
                ->constrained('contribuyentes')
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->rememberToken();
            $table->foreignId('id_rol')
                ->nullable()
                ->constrained('roles')
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
        Schema::dropIfExists('users');
    }
};
