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
        Schema::create('tb_productos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('numeroSerie');
            $table->string('marca');
            $table->integer('cantidad');
            $table->decimal('costoCompra', 10, 2);
            $table->date('fechaI');
            $table->string('foto')->nullable();
            $table->decimal('precioV', 10, 2);
            $table->string('estatus')->default('activo'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_productos');
    }
};