<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->bigIncrements('cdt_id');
            $table->biginteger('cdt_chairman_id')->unsigned();
            $table->biginteger('cdt_vice_chairman_id')->unsigned();
            $table->string('cdt_visi')->nullable();
            $table->string('cdt_misi')->nullable();
            $table->biginteger('cdt_is_active')->unsigned();
            $table->biginteger('cdt_created_by')->unsigned()->nullable();
            $table->biginteger('cdt_updated_by')->unsigned()->nullable();
            $table->biginteger('cdt_deleted_by')->unsigned()->nullable();
            $table->softDeletes();
            $table->timestamps();


           
            $table->foreign('cdt_chairman_id')->references('std_id')->on('students');
            $table->foreign('cdt_vice_chairman_id')->references('std_id')->on('students');

            $table->foreign('cdt_created_by')->references('cdt_id')->on('candidates')->onDelete('cascade');
            $table->foreign('cdt_updated_by')->references('cdt_id')->on('candidates')->onDelete('cascade');
            $table->foreign('cdt_deleted_by')->references('cdt_id')->on('candidates')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidates');
    }
}
