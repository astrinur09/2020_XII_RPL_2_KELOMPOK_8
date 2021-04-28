<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoteOfCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vote_of_candidates', function (Blueprint $table) {
            $table->bigIncrements('voc_id');
            $table->biginteger('voc_students_id')->unsigned()->nullable();
            $table->biginteger('voc_candidates_id')->unsigned();
            $table->biginteger('voc_created_by')->unsigned()->nullable();
            $table->biginteger('voc_updated_by')->unsigned()->nullable();
            $table->biginteger('voc_deleted_by')->unsigned()->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('voc_students_id')->references('std_usr_id')->on('students');
            $table->foreign('voc_candidates_id')->references('cdt_id')->on('candidates');

            $table->foreign('voc_created_by')->references('usr_id')->on('users')->onDelete('cascade');
            $table->foreign('voc_updated_by')->references('usr_id')->on('users')->onDelete('cascade');
            $table->foreign('voc_deleted_by')->references('usr_id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vote_of_candidates');
    }
}
