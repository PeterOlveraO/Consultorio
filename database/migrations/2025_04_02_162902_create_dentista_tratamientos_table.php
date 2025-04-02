<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dentista_tratamientos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dentista_id')->constrained('dentistas')->onDelete('cascade');
            $table->foreignId('tratamiento_id')->constrained('lista_tratamientos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dentista_tratamientos');
    }
};
