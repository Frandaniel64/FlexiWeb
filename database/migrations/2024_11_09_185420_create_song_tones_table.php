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
        Schema::create('song_tones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('song_id')->constrained()->onDelete('cascade');
            //tono para el cantante
            $table->string('singer_tone');
            //id del usuario tipo cantante
            $table->foreignId('singer_id')->constrained('users')->onDelete('cascade');
            
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('song_tones');
    }
};