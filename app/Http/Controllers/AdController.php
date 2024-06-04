<?php

namespace App\Http\Controllers;

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

        $ad = new \App\Models\Ad();
        $ad->title = $request->input('title');
        $ad->description = $request->input('description');
        $ad->location = $request->input('location');
        $ad->save();

        return redirect()->route('dashboard')->with('status', 'Ad created successfully!');
    }
}
