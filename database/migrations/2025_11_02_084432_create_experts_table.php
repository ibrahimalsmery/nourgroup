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
        Schema::create('experts', function (Blueprint $table) {
            $table->id('id');
            $table->string('name');
            $table->string('title');
            $table->string('specialization');
            $table->string('image')->nullable();
            $table->string('current_position');
            $table->text('qualifications')->nullable();
            $table->text('experience');
            $table->text('sectors')->nullable();
            $table->text('achievements')->nullable();
            $table->text('quote');
            $table->string('email')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('x')->nullable();
            $table->string('facebook')->nullable();
            $table->string('tiktok')->nullable();
            $table->string('youtube')->nullable();
            $table->string('instagram')->nullable();
            $table->string('website')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experts');
    }
};
