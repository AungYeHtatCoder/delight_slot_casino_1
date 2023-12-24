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
        Schema::create('slot_games', function (Blueprint $table) {
            $table->id();
            $table->string('game_id');
            $table->string('name_en');
            $table->string('name_mm');
            $table->string('image')->nullable(true);
            $table->string('type');
            $table->string('providerCode');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('slot_games');
    }
};