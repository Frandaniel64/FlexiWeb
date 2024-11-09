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
        Schema::create('song_chords', function (Blueprint $table) {
            $table->foreignId('song_id')->constrained('songs')->onDelete('cascade');
            $table->foreignId('musician_id')->constrained('users')->onDelete('cascade');
            $table->text('chords');
            $table->primary(['song_id', 'musician_id']);
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