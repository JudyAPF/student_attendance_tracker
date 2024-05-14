<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Instructor;
use App\Models\User;
use App\Models\Student;
use App\Models\Attendance;
use Illuminate\Support\Facades\DB;

class AdminDashboard extends Controller
{
    //
    public function index()
    {
        $user = auth()->user();
        $instructor = Instructor::where('user_id', $user->id)->first();

        $total_instructor = Instructor::count();
        $total_admin = User::where('role', 'admin')->count();

        return view('admin.dashboard', compact('total_instructor', 'total_admin'));
    }
}

