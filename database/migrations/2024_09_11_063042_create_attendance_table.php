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
        Schema::create('attendance', function (Blueprint $table) {
            $table->engine = 'InnoDB'; // Ensure InnoDB engine
            $table->id();
            $table->unsignedBigInteger('employee_id');
            $table->date('date');
            $table->time('time_in')->nullable();
            $table->time('time_out')->nullable();
            $table->time('undertime')->nullable();
            $table->integer('absences')->default(0);
            $table->timestamps();

            $table->foreign('employee_id')->references('id')->on('employees')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendance');
    }
};
