<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('voetballers', function (Blueprint $table) {
            $table->id();
            $table->string('naam');
            $table->integer('leeftijd');
            $table->string('positie');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('voetballers');
    }
};
