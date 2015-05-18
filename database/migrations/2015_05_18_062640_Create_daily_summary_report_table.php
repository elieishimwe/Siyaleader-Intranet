<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDailySummaryReportTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Daily-Summary-Report', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user');
			$table->text('yestActivities');
			$table->text('todayActivities');
			$table->text('yestHighightsActivities');
			$table->text('yestLowPoints');
			$table->integer('CRMCaptured');
			$table->integer('noCalls');
			$table->integer('noCallsSuccessful');
			$table->integer('noCallsUnsuccessful');
			$table->integer('noCallsUnsuccessfullNoReply');
			$table->integer('noCallsUnsuccessfullPhoneOff');
			$table->text('answerToHowImprove');
			$table->text('answerToPreventMeetingTarget');
			$table->text('answerToDifficulties');
			$table->text('answerToAdditionalWork');
			$table->text('suggestions');
			$table->dateTime('date');
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
		Schema::drop('Daily-Summary-Report');
	}

}
