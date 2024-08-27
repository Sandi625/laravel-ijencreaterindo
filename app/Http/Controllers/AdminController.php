<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index() {
        // Ensure the user is authenticated
        if (Auth::check()) {
            $user = Auth::user();

            // Pass the user to the view if needed
            return view('admin.dashboard', compact('user'));
        } else {
            // Redirect to login page or show an error if not authenticated
            return redirect()->route('login')->with('error', 'You must be logged in to access this page.');
        }
    }

    public function logout(Request $request) {
        Auth::logout(); // Log out the user

        // Optionally, invalidate the user's session
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirect to homepage with a success message
        return redirect('/')->with('success', 'You have been logged out successfully.');
    }
}
