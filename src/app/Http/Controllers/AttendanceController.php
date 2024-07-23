<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Attendance;
use Carbon\Carbon;

class AttendanceController extends Controller
{
    public function workStart(Request $request) {
        $user = Auth::user();
        $now = Carbon::now();
        $now_format = $now->format('Y-m-d');
        $now_format_time = $now->format('H:i:s');
        $attendance = Attendance::create(['work_start_time' => $now_format_time, 'user_id' => $user->id]);
        $stampings = Attendance::all();
        return view('date', compact('stampings', 'user', 'now_format', 'now_format_time'));
    }

    public function workEnd(Request $request) {
        $user = Auth::user();
        $now = Carbon::now();
        $now_format = $now->format('Y-m-d');
        $now_format_time = $now->format('H:i:s');
        $attendance = Attendance::create(['work_end_time' => $now_format_time, 'user_id' => $user->id]);
        $stampings = Attendance::all();
        return view('date', compact('stampings', 'user', 'now_format', 'now_format_time'));
    }

    public function breakStart(Request $request) {
        $user = Auth::user();
        $now = Carbon::now();
        $now_format = $now->format('Y-m-d');
        $now_format_time = $now->format('H:i:s');
        $attendance = Attendance::create(['break_start_time' => $now_format_time, 'user_id' => $user->id]);
        $work_start_time = $attendance->break_start_time;
        return view('date', compact('break_start_time', 'user', 'now_format', 'now_format_time'));
    }

    public function breakEnd(Request $request) {
        $user = Auth::user();
        $now = Carbon::now();
        $now_format = $now->format('Y-m-d');
        $now_format_time = $now->format('H:i:s');
        $attendance = Attendance::create(['break_end_time' => $now_format_time, 'user_id' => $user->id]);
        $work_start_time = $attendance->break_end_time;
        return view('date', compact('break_end_time', 'user', 'now_format', 'now_format_time'));
    }
}
