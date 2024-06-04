<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use Illuminate\Http\Request;

class AdController extends Controller
{
    /**
     * Store a newly created ad in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'location' => 'required|string|max:255',
        ]);

        $ad = new Ad();
        $ad->title = $request->input('title');
        $ad->description = $request->input('description');
        $ad->location = $request->input('location');
        $ad->save();

        return redirect()->route('dashboard')->with('success', 'Ad created successfully!');
    }

    public function show($id)
    {
        $ad = Ad::findOrFail($id);
        return view('ads.show', ['ad' => $ad]);
    }
}
