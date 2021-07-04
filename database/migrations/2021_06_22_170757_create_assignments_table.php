<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssignmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained('users')->nullable();
            $table->foreignId('tutor_id')->constrained('users')->nullable();
            $table->string('title');
            $table->string('guidelines');
            $table->dateTime('starts_at');
            $table->dateTime('ends_at');
            $table->string('passing_marks');
            $table->string('total_marks');
            $table->string('cover_img')->default('default.jpg');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assignments');
    }
}
