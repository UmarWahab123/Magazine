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
        Schema::table('page4s', function (Blueprint $table) {
            $table->text('image8')->nullable()->after('editordata001');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('page4s', function (Blueprint $table) {
            $table->dropColumn('image8');
        });
    }
};
