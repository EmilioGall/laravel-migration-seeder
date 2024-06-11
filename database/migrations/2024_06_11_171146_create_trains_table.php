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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company');
            $table->string('departure_station');
            $table->string('arrive_station');
            $table->date('departure_day');
            $table->time('departure_time');
            $table->date('arrive_day');
            $table->time('arrive_time');
            $table->string('train_code');
            $table->unsignedTinyInteger('cars_number');
            $table->boolean('is_in_time')->default(true);
            $table->boolean('is_deleted')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
