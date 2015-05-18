<?php namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class DailySummaryReport extends Eloquent
{


    protected $table    = 'Daily-Summary-Report';

    protected $fillable = ['user','yestActivities','todayActivities','yestHighightsActivities','yestLowPoints','CRMCaptured','noCalls','noCallsSuccessful','noCallsUnsuccessful','noCallsUnsuccessfullNoReply','noCallsUnsuccessfullPhoneOff','answerToHowImprove','answerToPreventMeetingTarget','answerToDifficulties','answerToAdditionalWork','suggestions','date'];



}
