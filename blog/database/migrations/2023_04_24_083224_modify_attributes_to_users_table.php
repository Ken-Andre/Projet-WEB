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
        Schema::connection('mysql2')->table('users', function (Blueprint $table) {
            //
            $table->string('name',50)->change();
            $table->string('lastname',50)->change()->nullable();
            $table->string('password',8)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('mysql2')->table('users', function (Blueprint $table) {
            //
            $table->string('name')->change();
            $table->string('lastname')->change()->nullable();
            $table->string('password')->change();
        });
    }
};
