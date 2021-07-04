<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Meetings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('meetings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained('users')->nullable();
            $table->foreignId('tutor_id')->constrained('users')->nullable();
            $table->string('subject');
            $table->string('topic');
            $table->string('start_time');
            $table->string('end_time');
            $table->date('date');
            $table->string('link');
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
        Schema::dropIfExists('meetings');
    }
}
