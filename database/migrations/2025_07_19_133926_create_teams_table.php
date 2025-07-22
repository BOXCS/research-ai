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
        // database/migrations/xxxx_xx_xx_xxxxxx_create_team_members_table.php
        Schema::create('team_members', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('position');
            $table->text('specialization');
            $table->text('education');
            $table->string('experience');
            $table->string('image');
            $table->string('email')->unique();
            $table->string('linkedin')->nullable();
            $table->string('google_scholar')->nullable();
            $table->integer('publications')->default(0);
            $table->integer('h_index')->default(0);
            $table->text('bio');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
