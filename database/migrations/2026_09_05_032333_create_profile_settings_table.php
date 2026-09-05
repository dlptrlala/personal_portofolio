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
        Schema::create('profile_settings', function (Blueprint $table) {
            $table->id();

            $table->string('hero_image')->nullable();
            $table->integer('hero_position_x')->default(50);
            $table->integer('hero_position_y')->default(50);
            $table->integer('hero_rotation')->default(0);

            $table->string('about_image')->nullable();
            $table->integer('about_position_x')->default(50);
            $table->integer('about_position_y')->default(50);
            $table->integer('about_rotation')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profile_settings');
    }
};
