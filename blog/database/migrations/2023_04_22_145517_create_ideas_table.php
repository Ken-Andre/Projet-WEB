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
        if(!Schema::connection('mysql2')->hasTable('ideas'))   {
            Schema::connection('mysql2')->create('ideas', function (Blueprint $table) {
                $table->id('idids');
                $table->string('description');
                $table->boolean('status');
                $table->unsignedBigInteger('matricule');
                $table->foreign('matricule')->references('matricule')->on('users');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('mysql2')->dropIfExists('ideas');
    }
};
