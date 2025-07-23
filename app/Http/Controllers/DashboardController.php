<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the admin dashboard
     */
    public function index()
    {
        $user = Auth::user();
        $totalUsers = User::count();
        
        return view('admin.dashboard', compact('user', 'totalUsers'));
    }

    /**
     * Show user profile
     */
    public function profile()
    {
        $user = Auth::user();
        return view('admin.profile', compact('user'));
    }

    /**
     * Show analytics page
     */
    public function analytics()
    {
        $user = Auth::user();
        $stats = [
            'total_users' => User::count(),
            'recent_registrations' => User::whereDate('created_at', today())->count(),
        ];
        
        return view('admin.analytics', compact('user', 'stats'));
    }
}
