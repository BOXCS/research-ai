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
        // database/migrations/xxxx_xx_xx_xxxxxx_create_publications_table.php
        Schema::create('publications', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('authors');
            $table->string('journal');
            $table->integer('year');
            $table->string('volume');
            $table->string('issue');
            $table->string('pages');
            $table->string('doi');
            $table->decimal('impact_factor', 3, 1);
            $table->integer('citation_count');
            $table->text('abstract');
            $table->string('pdf_url');
            $table->string('category');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publications');
    }
};
