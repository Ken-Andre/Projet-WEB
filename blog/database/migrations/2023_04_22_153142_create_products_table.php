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
        if(!Schema::connection('mysql2')->hasTable('products')) {
            Schema::connection('mysql2')->create('products', function (Blueprint $table) {
                $table->id('idprod');
                $table->string('designation');
                $table->integer('quantity');
                $table->float('price');
                $table->string('category');
                $table->string('image');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('mysql2')->dropIfExists('products');
    }
};
