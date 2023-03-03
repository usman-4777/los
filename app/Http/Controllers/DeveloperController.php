<?php

namespace App\Http\Controllers;

use App\Models\Developer;
use Illuminate\Http\Request;

class DeveloperController extends Controller
{
    public function index()
    {
        $data['developers'] = Developer::all();
        return view('crud.index')->with($data);
    }

    public function create()
    {
        return view('crud.form');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|unique:developers',
            'password' => 'required|string',
        ]);
        Developer::create($validated);
        return redirect()->route('get_developers');
    }

    public function edit($id) {
        $edit = Developer::findOrFail($id);
        return view('crud.form', compact($edit));
    }


}
