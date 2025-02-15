<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    /**
     * Display a listing of the reviews.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviews = Review::all();
        return response()->view('admin.dashboard', compact('reviews'));
    }



    /**
     * Store a newly created review in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|string|max:100',
            'rating' => 'required|integer|between:1,5',
            'isi_testimoni' => 'required|string',
            'photo' => 'nullable|image',
            'status' => 'nullable|boolean',
        ]);


        $review = new Review($validated);
        if ($request->hasFile('photo')) {
            $review->photo = $request->file('photo')->store('photos', 'public');
        }
        $review->save();


        return redirect()->route('page.review')->with('success', 'Review berhasil dibuat.');
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
        $data['updated_by'] = Auth::id();

        if ($request->hasFile('photo')) {
            if ($review->photo && file_exists(storage_path('app/public/' . $review->photo))) {
                unlink(storage_path('app/public/' . $review->photo));
            }
            $data['photo'] = $request->file('photo')->store('photos', 'public');
        }

        $review->update($data);

        return back()->with('success', 'Review update successfully.');
    }

    /**
     * Remove the specified review from storage.
     *
     * @param  \App\Models\Review $review
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Review $review): RedirectResponse
    {

        if ($review->photo && file_exists(storage_path('app/public/' . $review->photo))) {
            unlink(storage_path('app/public/' . $review->photo));
        }


        $review->delete();


        return back()->with('success', 'Review delete successfully.');
    }


}
