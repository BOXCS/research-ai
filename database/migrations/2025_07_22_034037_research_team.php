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
        Schema::create('research_team', function (Blueprint $table) {
            $table->foreignId('research_product_id')->constrained('research_products');
            $table->foreignId('team_member_id')->constrained('team_members');
            $table->string('role'); // e.g., 'Leader', 'Member', 'Advisor'
            $table->primary(['research_product_id', 'team_member_id']);
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
