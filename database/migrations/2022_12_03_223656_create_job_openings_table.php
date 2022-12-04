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
        Schema::create('job_openings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('job_title_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('industry_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->enum('type',['Contract','Full-Time','Internship','Part-Time','Temporary']);
            $table->enum('mode',['Physical only','Remote only','Physical & Remote']);
            $table->string('location');
            $table->text('description');
            $table->text('duty')->nullable();
            $table->text('required_skill');
            $table->text('activity');
            $table->text('challenge')->nullable();
            $table->text('experience');
            $table->unsignedDecimal('minsalary',10,2);
            $table->unsignedDecimal('maxsalary',10,2);
            $table->dateTime('closing_date');
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
        Schema::dropIfExists('job_openings');
    }
};
