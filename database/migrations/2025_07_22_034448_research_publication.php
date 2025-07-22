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
        Schema::create('research_publications', function (Blueprint $table) {
            $table->foreignId('research_product_id')->constrained('research_products');
            $table->foreignId('publication_id')->constrained('publications');
            $table->primary(['research_product_id', 'publication_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
