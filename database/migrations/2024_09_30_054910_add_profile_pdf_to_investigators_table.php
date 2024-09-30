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
        Schema::table('investigators', function (Blueprint $table) {
            $table->string('profile_pdf')->nullable()->after('description');  // Adds the profile_pdf column
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('investigators', function (Blueprint $table) {

            $table->dropColumn('profile_pdf');  // Removes the profile_pdf column if the migration is rolled back
        });
    }
};
