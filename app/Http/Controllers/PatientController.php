<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\User;

class PatientController extends Controller
{
    public function index()
    {
        $patients = Patient::all();
        return view('patients.index', compact('patients'));
    }

    public function create()
    {
        $users = User::all();
        return view('patients.create', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id', 
        ]);

        $patient = new Patient();
        $patient->user_id = $request->input('user_id');
        $patient->save();

        return redirect()->route('patients.index')
            ->with('success', 'Patient created successfully.');
    }

    public function show(Patient $patient)
    {
        return view('patients.show', compact('patient'));
    }

    public function edit(Patient $patient)
    {
        $users = User::all(); 
        return view('patients.edit', compact('patient', 'users'));
    }

    public function update(Request $request, Patient $patient)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id', 
        ]);

        $patient->user_id = $request->input('user_id');
        $patient->save();

        return redirect()->route('patients.index')
            ->with('success', 'Patient updated successfully.');
    }

    public function destroy(Patient $patient)
    {
        $patient->delete();

        return redirect()->route('patients.index')
            ->with('success', 'Patient deleted successfully.');
    }
}
