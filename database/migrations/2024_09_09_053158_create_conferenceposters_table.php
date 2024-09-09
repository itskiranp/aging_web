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
        Schema::create('conferenceposters', function (Blueprint $table) {

            $table->id(); // Creates an auto-incrementing primary key
            $table->string('title', 255); // VARCHAR(255) NOT NULL for title
            $table->text('authors'); // TEXT NOT NULL for authors
            $table->string('journal', 255)->nullable();
            $table->year('year')->nullable();
            $table->string('doi', 100)->nullable(); // VARCHAR(100) for DOI, nullable
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conferenceposters');
    }
};
