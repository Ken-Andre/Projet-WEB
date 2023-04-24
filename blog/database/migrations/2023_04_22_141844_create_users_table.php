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
        if (!Schema::hasTable('users')) {
            Schema::connection('mysql2')->create('users', function (Blueprint $table) {
                $table->id('matricule');
                $table->string('name');
                $table->string('lastname')->nullable(true);
                $table->string('email')->unique;
                $table->string('password');
                $table->string('location');
                $table->enum('role', ['student', 'staff', 'bde'])->default('student');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('mysql2')->dropIfExists('users');
    }
};
