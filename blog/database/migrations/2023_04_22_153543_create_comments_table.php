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
        if(!Schema::connection('mysql2')->hasTable('comments'))   {
            Schema::connection('mysql2')->create('comments', function (Blueprint $table) {
                $table->unsignedBigInteger('matricule');
                $table->foreign('matricule')
                    ->references('matricule')
                    ->on('users')
                    ->onDelete('cascade');

                $table->unsignedBigInteger('ideve');
                $table->foreign('ideve')
                    ->references('ideve')
                    ->on('events')
                    ->onDelete('cascade');
                $table->timestamps();


                $table->primary(['matricule', 'ideve']);
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('mysql2')->dropIfExists('comments');
    }
};
