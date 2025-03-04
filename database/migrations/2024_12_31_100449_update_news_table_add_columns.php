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
        Schema::table('news', function (Blueprint $table) {
           // $table->string('title')->after('id'); // Add 'title' column
           // $table->text('content')->nullable()->after('title'); 
          //  $table->string('image_url')->nullable()->after('content'); // Add 'image_url' column
          //  $table->timestamp('published_at')->nullable()->after('image_url'); // Add 'published_at' column
    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('news', function (Blueprint $table) {
            $table->dropColumn(['title', 'content', 'image_url', 'published_at']);
        });
    }
};
