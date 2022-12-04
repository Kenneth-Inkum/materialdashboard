<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recruits', function (Blueprint $table) {
            $table->id();
            $table->string('firstname',50);
            $table->string('lastname',50);
            $table->string('othername',50)->nullable();
            $table->string('dob',35);
            $table->enum('gender',['Male', 'Female']);
            $table->string('phonenumber');
            $table->string('location');
            $table->foreignId('country_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('state_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('education_level');
            $table->string('course_studied');
            $table->longText('about_me')->nullable();
            $table->longText('experience')->nullable();
            $table->longText('interest')->nullable();
            $table->longText('achievement')->nullable();
            $table->unsignedDecimal('expectedsalary',10,2)->nullable();
            $table->string('resume')->nullable();
            $table->string('certificate')->nullable();
            $table->foreignId('job_title_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('industry_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recruits');
    }
};
