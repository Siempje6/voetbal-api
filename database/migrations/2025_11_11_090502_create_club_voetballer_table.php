<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('club_voetballer', function (Blueprint $table) {
            $table->id();
            $table->foreignId('club_id')->constrained('clubs')->onDelete('cascade');
            $table->foreignId('voetballer_id')->constrained('voetballers')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('club_voetballer');
    }
};
