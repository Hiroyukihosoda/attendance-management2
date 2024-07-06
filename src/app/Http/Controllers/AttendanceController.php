<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Attendance;
use Carbon\Carbon;
// use App\Time;

class AttendanceController extends Controller
{
    public function workStart(Request $request) {
        $user = Auth::user();
        $now = Carbon::now();
        $now_format = $now->format('Y-m-d H:i:s');
        Attendance::insert(array('work_start_time' => $now_format, 'user_id' => $user->id));
        return redirect('/attendance');
    }
}
