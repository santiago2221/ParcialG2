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
        Schema::create('Libro', function (Blueprint $table) {
            $table->string('ISBN', 5);
            $table->string('nombre', 100);
            $table->text('descripcion');
            $table->string('generoLiterario', 100);
            $table->float('precioUnitario');
            $table->text('observacion');
            $table->string('foto', 10);
            $table->string('Area',5);
            $table->primary('ISBN');
            $table->foreign('Area')->references('idArea')->on('AreaConocimiento');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Libro');
    }
};
