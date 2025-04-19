<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToStudentsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('students', function (Blueprint $table) {
            // Add the missing columns
            $table->string('term')->nullable();
            $table->string('subject')->nullable();
            $table->integer('marks')->nullable();
            $table->float('tgpa')->nullable();
            $table->float('cgpa')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('students', function (Blueprint $table) {
            // Drop the added columns if rolling back
            $table->dropColumn(['term', 'subject', 'marks', 'tgpa', 'cgpa']);
        });
    }
}
