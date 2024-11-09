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
            $table->foreignId('song_id')->constrained('songs')->onDelete('cascade');
            $table->foreignId('singer_id')->constrained('users')->onDelete('cascade');
            $table->string('tone');
            $table->primary(['song_id', 'singer_id']);
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