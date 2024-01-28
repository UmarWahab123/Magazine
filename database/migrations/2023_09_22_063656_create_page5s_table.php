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
        Schema::create('page5s', function (Blueprint $table) {
            $table->id();
            $table->string('page_title');
            $table->string('image_bg');
            $table->string('icon');
            $table->string('image_heading');
            $table->string('image_heading2');
            $table->string('title1');
            $table->text('text1');
            $table->string('video');
            $table->string('image1');
            $table->string('image2');
            $table->string('text2');
            $table->text('text3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page5s');
    }
};
