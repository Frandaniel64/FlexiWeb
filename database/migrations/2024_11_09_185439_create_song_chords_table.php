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
        //tabla donde se almacenan los acordes de las canciones para los instrumentos segun el  tono del cantante
        Schema::create('song_chords', function (Blueprint $table) {
            $table->id();
            $table->foreignId('song_id')->constrained()->onDelete('cascade');
            //id del istrumento
            $table->foreignId('instrument_id')->constrained()->onDelete('cascade');
            //acordes de la cancion
            $table->text('chords');
            //id del tono del cantante 
            $table->foreignId('singer_tone_id')->constrained('song_tones')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('song_chords');
    }
};