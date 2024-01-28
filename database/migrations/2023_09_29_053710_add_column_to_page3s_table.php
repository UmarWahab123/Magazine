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
        Schema::table('page3s', function (Blueprint $table) {
            $table->string('edition_temp_title')->nullable()->after('editionId');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('page3s', function (Blueprint $table) {
            $table->dropColumn('edition_temp_title');
        });
    }
};
