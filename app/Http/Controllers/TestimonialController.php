<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the reviews.
     *
     * @return \Illuminate\Http\Response
     */


     public function index()
    {
        // Ambil semua review dengan status true
        $reviews = DB::table('reviews')->where('status', 1)->get();

        // Kirimkan data reviews ke view 'page.review'
        return view('page.review', ['reviews' => $reviews]);
    }







    /**
     * Store a newly created review in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:100',
            'rating' => 'required|integer|between:1,5',
            'isi_testimoni' => 'required|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->except('photo'); // Exclude 'photo' for conditional handling

        $data['created_by'] = Auth::id(); // Set the creator's ID

        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('photos', 'public');
        }

        Review::create($data);

        return back()->with('success', 'Review created successfully.');
    }



    /**
     * Update the specified review in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  \App\Models\Review $review
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Review $review): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:100',
            'rating' => 'required|integer|between:1,5',
            'isi_testimoni' => 'required|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'nullable|boolean',
        ]);

        $data = $request->all();
        $data['updated_by'] = Auth::id(); // Set the updater's ID

        if ($request->hasFile('photo')) {
            // Delete old photo if exists
            if ($review->photo && file_exists(storage_path('app/public/' . $review->photo))) {
                unlink(storage_path('app/public/' . $review->photo));
            }
            $data['photo'] = $request->file('photo')->store('photos', 'public');
        }

        $review->update($data);

        return back()->with('success', 'Review edit successfully.');
    }

    /**
     * Remove the specified review from storage.
     *
     * @param  \App\Models\Review $review
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Review $review): RedirectResponse
    {
        // Delete the photo if exists
        if ($review->photo && file_exists(storage_path('app/public/' . $review->photo))) {
            unlink(storage_path('app/public/' . $review->photo));
        }

        $review->delete();

        return back()->with('success', 'Review delete successfully.');
    }
}
