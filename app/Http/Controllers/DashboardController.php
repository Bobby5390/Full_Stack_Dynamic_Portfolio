<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class DashboardController extends Controller
{
    /**
     * Update user profile
     */
    public function updateProfile(Request $request)
    {
        $user = Auth::user();
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'student_id' => 'nullable|string|max:50',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('avatar')) {
            $avatarPath = $request->file('avatar')->store('avatars', 'public');
            $data['avatar'] = '/storage/' . $avatarPath;
        }

        $user->update($data);

        return redirect()->route('admin.profile')->with('success', 'Profile updated successfully!');
    }
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
