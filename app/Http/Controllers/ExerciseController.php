<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use Illuminate\Http\Request;

class ExerciseController extends Controller
{
   /**
     * Display a listing of the exercises.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exercises = Exercise::all();
        return view('exercises.index', compact('exercises'));
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
            'title' => 'required',
            'description' => 'required',
            'instructions' => 'required',
            // Add more validation rules as needed
        ]);

        Exercise::create($request->all());

        return redirect()->route('exercises.index')
            ->with('success', 'Exercise created successfully.');
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
        $exercise->delete();

        return redirect()->route('exercises.index')
            ->with('success', 'Exercise deleted successfully.');
    }
}
