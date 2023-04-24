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
        if(!Schema::connection('mysql2')->hasTable('bucket'))  {
            Schema::connection('mysql2')->create('bucket', function (Blueprint $table) {
                $table->id('idbuc');
                $table->integer('quantity');
                $table->float('total price');
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
        Schema::connection('mysql2')->dropIfExists('buckets');
    }
};
