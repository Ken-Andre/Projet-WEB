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
        if(!Schema::connection('mysql2')->hasTable('images'))  {
            Schema::connection('mysql2')->create('images', function (Blueprint $table) {
                $table->id('idimg');
                $table->string('url');
                $table->unsignedBigInteger('matricule');
                $table->foreign('matricule')->references('matricule')->on('users');
                $table->unsignedBigInteger('ideve');
                $table->foreign('ideve')->references('ideve')->on('events');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('mysql2')->dropIfExists('images');
    }
};
