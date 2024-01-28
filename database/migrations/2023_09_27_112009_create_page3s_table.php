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
        Schema::create('page3s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('editionId')->nullable();
            $table->string('title')->nullable();
            $table->string('background_img')->nullable();
            $table->string('heading')->nullable();
            $table->longText('editordata')->nullable();
            $table->string('editordataf')->nullable();
            $table->string('image')->nullable();
            $table->string('icon_img')->nullable();
            $table->string('editordatas')->nullable();
            $table->string('front_image')->nullable();
            $table->string('bg_img')->nullable();
            $table->string('icon2_img')->nullable();
            $table->string('heading2')->nullable();
            $table->longText('editordatat')->nullable();
            $table->longText('editordata4')->nullable();
            $table->string('icon3_img')->nullable();
            $table->longText('editordata5')->nullable();
            $table->text('images2')->nullable();
            $table->text('images3')->nullable();
            $table->string('icon4_img')->nullable();
            $table->longText('editordata6')->nullable();
            $table->longText('editordata7')->nullable();
            $table->string('image4')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page3s');
    }
};
