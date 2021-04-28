<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('std_id');
            $table->unsignedBigInteger('std_usr_id')->nullable();
            $table->string('nis');
            $table->string('class');
            $table->string('gender');
            $table->boolean('status');

            $table->biginteger('std_created_by')->unsigned()->nullable();
            $table->biginteger('std_updated_by')->unsigned()->nullable();
            $table->biginteger('std_deleted_by')->unsigned()->nullable();
            $table->softDeletes();
            $table->timestamps();


            $table->foreign('std_usr_id')->references('usr_id')->on('users');
            $table->foreign('std_created_by')->references('std_id')->on('students')->onDelete('cascade');
            $table->foreign('std_updated_by')->references('std_id')->on('students')->onDelete('cascade');
            $table->foreign('std_deleted_by')->references('std_id')->on('students')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student');
    }
}
