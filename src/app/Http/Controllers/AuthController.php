<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function index(Request $request) {
        $users = User::all();
        return view('index', compact('users'));
    }

    public function date() {
        return view('date');
    }
}
