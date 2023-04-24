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
        if(!Schema::connection('mysql2')->hasTable('votes'))  {
            Schema::connection('mysql2')->create('votes', function (Blueprint $table) {
                $table->unsignedBigInteger('matricule');
                $table->foreign('matricule')
                    ->references('matricule')
                    ->on('users')
                    ->onDelete('cascade');

                $table->unsignedBigInteger('idids');
                $table->foreign('idids')
                    ->references('idids')
                    ->on('ideas')
                    ->onDelete('cascade');

                $table->timestamps();


                $table->primary(['matricule', 'idids']);
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('mysql2')->dropIfExists('votes');
    }
};
