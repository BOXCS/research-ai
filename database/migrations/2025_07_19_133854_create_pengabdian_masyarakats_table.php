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
        // database/migrations/xxxx_xx_xx_xxxxxx_create_community_programs_table.php
        Schema::create('pengabdian_masyarakats', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('image');
            $table->string('target_audience');
            $table->date('tgl_mulai');
            $table->date('tgl_selesai');
            $table->integer('participants');
            $table->string('location');
            $table->string('duration');
            $table->enum('status', ['Completed', 'Ongoing', 'Planned']);
            $table->text('impact');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengabdian_masyarakats');
    }
};
