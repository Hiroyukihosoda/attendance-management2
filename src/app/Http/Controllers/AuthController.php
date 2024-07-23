<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(Request $request) {
        $user = Auth::user();
        return view('index', compact('user'));
    }

    public function date() {
        $user = Auth::user();
        $now = Carbon::now();
        $now_format = $now->format('Y-m-d');
        return view('date', compact('now_format'));
    }
}
