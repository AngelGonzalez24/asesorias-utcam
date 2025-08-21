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
        Schema::create('asesorias', function (Blueprint $table) {
            $table->id();
            $table->string('carrera');            // Carrera como texto
            $table->string('grupo');
            $table->string('cuatrimestre');
            $table->string('materia');
            $table->string('maestro');
            $table->dateTime('fecha_hora');       // Fecha y hora de la asesoría
            $table->text('observaciones')->nullable(); // Opcional
            $table->string('Estatus')->default('Pendiente');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asesorias');
    }
};
