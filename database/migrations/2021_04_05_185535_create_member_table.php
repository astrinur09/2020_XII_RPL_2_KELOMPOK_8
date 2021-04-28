<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->bigIncrements('mbr_id');
            $table->unsignedBigInteger('mbr_students_id')->nullable();
            $table->string('reason');
            $table->string('division');
            $table->biginteger('mbr_created_by')->unsigned()->nullable();
            $table->biginteger('mbr_updated_by')->unsigned()->nullable();
            $table->biginteger('mbr_deleted_by')->unsigned()->nullable();
            $table->softDeletes();
            $table->timestamps();


            $table->foreign('mbr_students_id')->references('std_id')->on('students');
            $table->foreign('mbr_created_by')->references('usr_id')->on('users')->onDelete('cascade');
            $table->foreign('mbr_updated_by')->references('usr_id')->on('users')->onDelete('cascade');
            $table->foreign('mbr_deleted_by')->references('usr_id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('member');
    }
}
