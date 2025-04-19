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
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->string('name'); // User's name
            $table->string('email')->unique(); // Unique email address
            $table->string('password'); // Password field
            $table->enum('role', ['admin', 'student']); // Role of the user (admin or student)
            $table->rememberToken(); // Token for "remember me" functionality
            $table->timestamps(); // Created at & Updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
