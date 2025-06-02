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
        Schema::create('rentals', function (Blueprint $table) {
            $table->id();
            $table->integer('student_id');
            $table->integer('bicycle_id');
            $table->integer('station_id');
            $table->integer('start_station_id');
            $table->dateTime('start_time');
            $table->integer('end_station_id');
            $table->dateTime('end_time');
            $table->integer('actual_duration_minutes');
            $table->decimal('cost');
            $table->enum('status',['active','completed','overdue','cancelled'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rentals');
    }
};
