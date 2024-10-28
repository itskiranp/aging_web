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

            $table->id(); 
            $table->string('title', 255);
            $table->text('authors'); 
            $table->string('journal', 255)->nullable();
            $table->year('year')->nullable();
            $table->string('doi', 100)->nullable(); 
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
