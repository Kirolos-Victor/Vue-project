<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveyResponsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('survey_responses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('survey_id');
            $table->unsignedBigInteger('question_id');
            $table->unsignedBigInteger('answer_id');
            $table->timestamps();
        });
        Schema::table('survey_responses',function (Blueprint $table){
            $table->foreign('survey_id')->references('id')->on('surveys')->onUpdate('cascade')->onDelete('cascade');

        }); Schema::table('survey_responses',function (Blueprint $table){
        $table->foreign('question_id')->references('id')->on('questions')->onUpdate('cascade')->onDelete('cascade');

    }); Schema::table('survey_responses',function (Blueprint $table){
        $table->foreign('answer_id')->references('id')->on('answers')->onUpdate('cascade')->onDelete('cascade');

    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('survey_responses');
    }
}
