<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publications', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key (id INT AUTO_INCREMENT PRIMARY KEY)
            $table->string('title', 255); // VARCHAR(255) NOT NULL for title
            $table->text('authors'); // TEXT NOT NULL for authors
            $table->string('journal', 255)->nullable(); // VARCHAR(255) for journal, nullable
            $table->year('year')->nullable(); // YEAR for the publication year, nullable
            $table->string('volume_issue', 50)->nullable(); // VARCHAR(50) for volume/issue, nullable
            $table->string('doi', 100)->nullable(); // VARCHAR(100) for DOI, nullable
            $table->timestamps(); // created_at TIMESTAMP, updated_at TIMESTAMP with ON UPDATE CURRENT_TIMESTAMP
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('publications');
    }
}
