<?php

namespace App\Http\Controllers;

use App\Models\Opportunity;
use Illuminate\Http\Request;

class OpportunityController extends Controller
{
    public function store(Request $request)
    {
        // Validate incoming request
        $request->validate([
            'event_name' => 'required|string|max:255',
            'date' => 'required|date',
            'time' => 'required|string',
            'location' => 'required|string|max:255',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);

        // Create a new Opportunity instance and save to database
        Opportunity::create($request->all());

        // Redirect or return response
        return redirect()->back()->with('success', 'Opportunity registered successfully!');
    }



    public function showMap()
    {
        // Fetch saved opportunities from the database
        $opportunities = Opportunity::all(); // Ensure this line correctly fetches data
        
        return view('map', compact('opportunities')); // Pass the variable to the view
    }
    

}


