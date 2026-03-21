<?php

namespace App\Http\Controllers;

use App\Http\Requests\TourRequest;
use App\Models\Tag;
use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tours = Tour::all();
        return view('tour.index', compact('tours'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tags = Tag::all();
        return view('tour.create', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TourRequest $request)
    {
        $tour = Tour::create([
            'name' => $request->name,
            'description' => $request->description,
            'country' => $request->country
        ]);

        if ($request->img) {
            $tour->img = $request->file('img')->store('img');
            $tour->save();
        }

        $tour->tags()->attach($request->tags);

        return redirect()->back()->with('message', 'Hai inserito il tour');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tour $tour)
    {
        return view('tour.show', compact('tour'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tour $tour)
    {
        return view('tour.edit', compact('tour'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tour $tour)
    {
        if ($request->file('img')) {
            Storage::disk('public')->delete($tour->img);
            $img = $request->file('img')->store('img');
        }

        $tour->update([
            'name' => $request->name,
            'description' => $request->description,
            'country' => $request->country,
            'img' => $img
        ]);

        return redirect()->back()->with('message', 'Tour Modificato');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tour $tour)
    {
        if ($tour->img !== 'img/road-trip-default.png') {
            Storage::disk('public')->delete($tour->img);
        } // cancella l'immagine solo se non è quella di default
        $tour->delete();

        $tours = Tour::all();
        return view('tour.index', compact('tours'))->with('message', 'Tour Eliminato');
    }
}
