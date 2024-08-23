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
        Schema::create('role_club', function (Blueprint $table) {
            $table->id();
            $table->foreignId('info_users_id')->constrained('info_users');
            $table->foreignId('club_id')->constrained('club');
            $table->foreignId('sub_role_id')->constrained('sub_role');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('role_club');
    }
};
