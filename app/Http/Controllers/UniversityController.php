<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\University;

class UniversityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $universities = University::orderBy('created_at', 'DESC')->get();

        return view('universities.index', compact('universities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('universities.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'acronym' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'address' => 'nullable|string',
            'website_link' => 'nullable|string|max:255',
            'email_address' => 'nullable|email|max:255',
            'contact1' => 'nullable|string|max:255',
            'contact2' => 'nullable|string|max:255',
            'total_students' => 'nullable|integer|min:0',
            'integration_percentage' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);


        if ($request->hasFile('image')) {

            $imageName = time() . '.' . $request->image->extension();

            $request->image->move(public_path('images'), $imageName);
        }

        // Créer une nouvelle université avec les données validées
        $university = new University;
        $university->fill($validatedData);
        // Stocker le chemin de l'image dans le modèle University si une image a été téléchargée
        if (isset($imageName)) {
            $university->image_path = 'images/' . $imageName;
        }
        // Enregistrer l'université dans la base de données
        $university->save();

        // Rediriger avec un message de succès
        return redirect()->route('universities')->with('success', 'University added successfully');
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $university = University::findOrFail($id);

        return view('universities.show', compact('university'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $university = University::findOrFail($id);

        return view('universities.edit', compact('university'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $university = University::findOrFail($id);

        $university->update($request->all());

        return redirect()->route('universities')->with('success', 'University updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $university = University::findOrFail($id);

        $university->delete();

        return redirect()->route('universities')->with('success', 'University deleted successfully');
    }
}
