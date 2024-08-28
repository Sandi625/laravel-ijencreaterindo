<?php
namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index() {
        // Ensure the user is authenticated
        if (Auth::check()) {
            $user = Auth::user();
            $reviews = Review::all(); // Retrieve all reviews

            // Pass both 'reviews' and 'user' to the view
            return response()->view('admin.dashboard', compact('reviews', 'user'));
        } else {
            // Redirect to the login page if not authenticated
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
