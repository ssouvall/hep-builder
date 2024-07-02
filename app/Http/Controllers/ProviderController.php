<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Provider;
use App\Models\User;

class ProviderController extends Controller
{
    public function index()
    {
        $providers = Provider::all();
        return view('providers.index', compact('providers'));
    }

    public function create()
    {
        $users = User::all(); 
        return view('providers.create', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id', 
        ]);

        $provider = new Provider();
        $provider->user_id = $request->input('user_id');
        $provider->save();

        return redirect()->route('providers.index')
            ->with('success', 'Provider created successfully.');
    }

    public function show(Provider $provider)
    {
        return view('providers.show', compact('provider'));
    }

    public function edit(Provider $provider)
    {
        $users = User::all(); 
        return view('providers.edit', compact('provider', 'users'));
    }

    public function update(Request $request, Provider $provider)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id', 
        ]);

        $provider->user_id = $request->input('user_id');
        $provider->save();

        return redirect()->route('providers.index')
            ->with('success', 'Provider updated successfully.');
    }

    public function destroy(Provider $provider)
    {
        $provider->delete();

        return redirect()->route('providers.index')
            ->with('success', 'Provider deleted successfully.');
    }}
