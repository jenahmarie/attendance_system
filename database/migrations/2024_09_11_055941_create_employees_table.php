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
        Schema::create('employees', function (Blueprint $table) {
            $table->engine = 'InnoDB'; // Ensure InnoDB engine
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('department');
            $table->enum('role', ['Regular', 'Intern', 'OJT'])->default('Regular');
            $table->string('email')->unique();
            $table->string('phone_number')->nullable();
            $table->string('work_phone_number')->nullable();
            // Migration file
            $table->string('profile_image')->default('images/default profile.png');// Default profile image
            $table->enum('sex', ['male', 'female'])->default('male');; // Add sex column with 'male' and 'female' values

            $table->timestamps();
        });
    }




    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
