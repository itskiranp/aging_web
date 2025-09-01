<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    public function up(): void
    {
        // Change ENUM to STRING
        Schema::table('gallery_items', function (Blueprint $table) {
            $table->string('category')->change();
        });
    }

    public function down(): void
    {
        // Revert back to ENUM if you ever rollback
        DB::statement("ALTER TABLE gallery_items MODIFY category ENUM('training', 'survey', 'lab', 'visitors', 'other') NOT NULL");
    }
};
