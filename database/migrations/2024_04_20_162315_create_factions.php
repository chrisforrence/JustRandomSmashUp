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
        Schema::create('factions', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('label');
            $table->string('icon_path')->nullable();
            $table->foreignUuid('set_id');
            $table->boolean('requires_madness')->default(false);
            $table->boolean('requires_monsters')->default(false);
            $table->boolean('requires_treasure')->default(false);
            $table->boolean('requires_stasis')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('factions');
    }
};
