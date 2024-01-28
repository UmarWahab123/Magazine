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
        Schema::create('page2s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('editionId')->nullable();
            $table->string('title')->nullable();
            $table->text('image')->nullable();
            $table->string('heading1')->nullable();
            $table->text('text1')->nullable();
            $table->string('heading2')->nullable();
            $table->text('text2')->nullable();
            $table->string('heading3')->nullable();
            $table->text('text3')->nullable();
            $table->text('image1')->nullable();
            $table->text('text4')->nullable();
            $table->string('heading4')->nullable();
            $table->text('text5')->nullable();
            $table->string('title2')->nullable();
            $table->text('text6')->nullable();
            $table->text('logo')->nullable();
            $table->text('description_a')->nullable();
            $table->text('description_b')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page2s');
    }
};
