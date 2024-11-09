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
        Schema::create('musician_instruments', function (Blueprint $table) {
            $table->id();
            //relacion instrumento usuario    
            $table->foreignId('musician_id')->constrained()->onDelete('cascade');
            $table->foreignId('instrument_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('musician_instruments');
    }
};