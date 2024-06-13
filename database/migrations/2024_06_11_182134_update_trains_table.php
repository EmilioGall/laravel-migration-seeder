<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * ALTER TABLE `trains` (
        ADD `seats_number` UNSIGNED SMALLINT NOT NULL
        AFTER `cars_number`
       );
     */
    public function up(): void
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->unsignedSmallInteger('seats_number')->after('cars_number');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->dropColumn('seats_number');
        });
    }
};
