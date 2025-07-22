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
        Schema::create('community_service_team', function (Blueprint $table) {
            $table->foreignId('community_service_id')->constrained('community_services');
            $table->foreignId('team_member_id')->constrained('team_members');
            $table->string('role');
            $table->primary(['community_service_id', 'team_member_id']);
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
