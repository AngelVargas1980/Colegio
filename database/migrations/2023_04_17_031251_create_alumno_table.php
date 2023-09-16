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
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 55);
            $table->integer('edad');
            $table->string('grado', 25);
            $table->string('promedio', 25);
            $table->string('direccion', 175);
            $table->string('telefono', 25);
            $table->string('correo', 45);
            $table->unsignedBigInteger('sede_codigo')->nullable();

            $table->foreign('sede_codigo')->references('id')->on('sedes')->onDelete('no action');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumno');
    }
};
