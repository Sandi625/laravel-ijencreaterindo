<?php
namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index() {

        if (Auth::check()) {
            $user = Auth::user();
            $reviews = Review::all();


            return response()->view('admin.dashboard', compact('reviews', 'user'));
        } else {

            return redirect()->route('login')->with('error', 'You must be logged in to access this page.');
        }
    }


    public function logout(Request $request) {
        Auth::logout();


        $request->session()->invalidate();
        $request->session()->regenerateToken();


        return redirect('/')->with('success', 'You have been logged out successfully.');
    }
}
