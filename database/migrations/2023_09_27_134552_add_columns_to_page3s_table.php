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
            $table->longText('editordata8')->nullable()->after('editordata7');
            $table->longText('editordatar')->after('editordatas')->nullable();
            $table->text('image5')->nullable()->after('image4');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('page3s', function (Blueprint $table) {
            $table->dropColumn('editordata8');
            $table->dropColumn('editordatar');
            $table->dropColumn('image5');
        });
    }
};
