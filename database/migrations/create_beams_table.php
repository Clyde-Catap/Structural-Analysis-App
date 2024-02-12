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
        Schema::create('beams', function (Blueprint $table) {
            $table->id();
            $table->json('forces');
            $table->decimal('reaction_at_start', $precision = 10, $scale = 6);
            $table->decimal('reaction_at_end', $precision = 10, $scale = 6);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beams');
    }
};
