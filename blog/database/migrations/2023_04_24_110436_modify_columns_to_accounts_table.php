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
        Schema::connection('mysql')->table('accounts', function (Blueprint $table) {
            //
            $table->dropColumn('password');
            $table->enum('role',['student','staff','bde']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('mysql')->table('accounts', function (Blueprint $table) {
            //
            $table->dropColumn('role');
            $table->string('password');
        });
    }
};
