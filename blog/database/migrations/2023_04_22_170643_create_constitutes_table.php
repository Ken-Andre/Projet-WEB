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
        if(!Schema::connection('mysql2')->hasTable('constitutes'))  {
            Schema::connection('mysql2')->create('constitutes', function (Blueprint $table) {
                $table->unsignedBigInteger('idprod');
                $table->foreign('idprod')
                    ->references('idprod')
                    ->on('products')
                    ->onDelete('cascade');

                $table->unsignedBigInteger('idbuc');
                $table->foreign('idbuc')
                    ->references('idbuc')
                    ->on('bucket')
                    ->onDelete('cascade');
                $table->timestamps();
                $table->integer('quantity');


                $table->primary(['matricule', 'idbuc']);
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('mysql2')->dropIfExists('constitutes');
    }
};
