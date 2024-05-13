<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WorkingHour;

class WorkingHourController extends Controller
{
    private const SESSION_KEY = 'timer';

    public function startTimer(Request $request)
    {
        $startTime = time();
        session([self::SESSION_KEY => $startTime]);

        return response()->json(['status' => 'success', 'startTime' => $startTime]);
    }

    public function stopTimer(Request $request)
    {
        $startTime = session(self::SESSION_KEY);
        $elapsedTime = time() - $startTime;

        session()->forget(self::SESSION_KEY);

        return response()->json(['status' => 'success', 'elapsedTime' => $elapsedTime]);
    }


    public function storeWorkingHours(Request $request)
{
    $workingHour = new WorkingHour();
    $workingHour->day_name = $request->day_name;
    $workingHour->work_time = $request->work_time;
    $workingHour->short_break_time = $request->short_break_time;
    $workingHour->long_break_time = $request->long_break_time;
    $workingHour->save();

    return response()->json(['status' => 'success']);
}


}
