<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;

class ExerciseController extends Controller
{
   /**
     * Display a listing of the exercises.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userId = Auth::id();
        $exercises = Exercise::where(function ($query) use ($userId) {
            $query->where('isPrivate', false)
                  ->orWhere(function ($query) use ($userId) {
                      $query->where('isPrivate', true)
                            ->where('user_id', $userId);
                  });
        })->get();
        return Inertia::render('Dashboard', ['exercises' => $exercises, 'userId' => $userId]);
    }

    /**
     * Show the form for creating a new exercise.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('exercises.create');
    }

    /**
     * Store a newly created exercise in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'instructions' => 'required|string',
            'image' => 'nullable|file|image|max:1024', // 1MB Max
        ]);
    
        $imagePath = null;
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('img'), $imageName);
            $imagePath = 'img/' . $imageName;
        }

        Exercise::create([
            'title' => $request->title,
            'description' => $request->description,
            'instructions' => $request->instructions,
            'image' => $imagePath,
            'isPrivate' => true,
            'user_id' => Auth::id(), 
        ]);
    
        $userId = Auth::id();
        $exercises = Exercise::where(function ($query) use ($userId) {
            $query->where('isPrivate', false)
                  ->orWhere(function ($query) use ($userId) {
                      $query->where('isPrivate', true)
                            ->where('user_id', $userId);
                  });
        })->get();
        return Inertia::render('Dashboard', ['exercises' => $exercises, 'userId' => $userId]);
    }

    /**
     * Display the specified exercise.
     *
     * @param  \App\Models\Exercise  $exercise
     * @return \Illuminate\Http\Response
     */
    public function show(Exercise $exercise)
    {
        return view('exercises.show', compact('exercise'));
    }

    /**
     * Show the form for editing the specified exercise.
     *
     * @param  \App\Models\Exercise  $exercise
     * @return \Illuminate\Http\Response
     */
    public function edit(Exercise $exercise)
    {
        return view('exercises.edit', compact('exercise'));
    }

    /**
     * Update the specified exercise in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Exercise  $exercise
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Exercise $exercise)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'instructions' => 'required',
            // Add more validation rules as needed
        ]);

        $exercise->update($request->all());

        return redirect()->route('exercises.index')
            ->with('success', 'Exercise updated successfully.');
    }

    /**
     * Remove the specified exercise from storage.
     *
     * @param  \App\Models\Exercise  $exercise
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exercise $exercise)
    {
        if ($exercise->user_id !== Auth::id()) {
            return redirect()->route('dashboard')->with('error', 'You are not authorized to delete this exercise.');
        }

        $exercise->delete();

        return redirect()->route('dashboard')->with('success', 'Exercise deleted successfully!');
    }
}
