<?php

namespace App\Http\Controllers;

use App\Models\HomeExerciseProgram;
use Illuminate\Http\Request;

class HomeExerciseProgramController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programs = HomeExerciseProgram::all();
        return view('programs.index', compact('programs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('programs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'user_exercises' => 'required|array',
        ]);
    
        $program = HomeExerciseProgram::create([
            'title' => $request->title,
        ]);
    
        $program->userExercises()->attach($request->user_exercises);
    
        return redirect()->route('programs.index')
                         ->with('success', 'Program created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HomeExerciseProgram  $homeExerciseProgram
     * @return \Illuminate\Http\Response
     */
    public function show(HomeExerciseProgram $program)
    {
        return view('programs.show', compact('program'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomeExerciseProgram  $homeExerciseProgram
     * @return \Illuminate\Http\Response
     */
    public function edit(HomeExerciseProgram $program)
    {
        return view('programs.edit', compact('program'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomeExerciseProgram  $homeExerciseProgram
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HomeExerciseProgram $program)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'user_exercises' => 'required|array', // Assuming user_exercises is an array of user exercise ids
        ]);
    
        $program->update([
            'title' => $request->title,
        ]);
    
        // Sync selected user exercises to the program
        $program->userExercises()->sync($request->user_exercises);
    
        return redirect()->route('programs.index')
                         ->with('success', 'Program updated successfully.');
    }

    public function addUserExercises(Request $request, HomeExerciseProgram $homeExerciseProgram)
    {
        // Validate the incoming request
        $request->validate([
            'user_exercise_ids' => 'required|array', // Array of user exercise ids
            'user_exercise_ids.*' => 'exists:user_exercises,id', // Each id must exist in user_exercises table
        ]);

        // Attach the user exercises to the home exercise program
        $homeExerciseProgram->userExercises()->attach($request->user_exercise_ids);

        // Optionally, return a response indicating success
        return response()->json(['message' => 'User exercises added successfully'], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomeExerciseProgram  $homeExerciseProgram
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomeExerciseProgram $program)
    {
        $program->delete();

        return redirect()->route('programs.index')
                         ->with('success', 'Program deleted successfully.');
    }
}
