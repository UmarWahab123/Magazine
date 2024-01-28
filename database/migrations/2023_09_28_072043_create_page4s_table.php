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
        Schema::create('page4s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('editionId')->nullable();
            $table->string('title')->nullable();
            $table->text('bg_img')->nullable();
            $table->text('editordata')->nullable();
            $table->text('editordata1')->nullable();
            $table->string('title1')->nullable();
            $table->text('editordata2')->nullable();
            $table->text('image')->nullable();
            $table->text('editordata3')->nullable();
            $table->text('editordata4')->nullable();
            $table->text('editordata5')->nullable();
            $table->text('editordata6')->nullable();
            $table->text('image2')->nullable();
            $table->string('heading')->nullable();
            $table->string('heading1')->nullable();
            $table->text('editordata7')->nullable();
            $table->text('editordata8')->nullable();
            $table->text('icon_img')->nullable();
            $table->text('editordata9')->nullable();
            $table->text('image3')->nullable();
            $table->text('editordata01')->nullable();
            $table->text('image4')->nullable();
            $table->text('editordata02')->nullable();
            $table->text('editordata03')->nullable();
            $table->text('icon2_img')->nullable();
            $table->text('editordata04')->nullable();
            $table->text('image5')->nullable();
            $table->text('editordata05')->nullable();
            $table->text('image6')->nullable();
            $table->text('editordata06')->nullable();
            $table->text('editordata07')->nullable();
            $table->text('icon3_img')->nullable();
            $table->text('editordata08')->nullable();
            $table->text('editordata09')->nullable();
            $table->text('editordata001')->nullable();
            $table->text('image7')->nullable();
            $table->text('card_img')->nullable();
            $table->text('editordata002')->nullable();
            $table->text('icon4_img')->nullable();
            $table->text('editordata003')->nullable();
            $table->text('editordata004')->nullable();
            $table->text('editordata005')->nullable();
            $table->text('editordata006')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page4s');
    }
};
