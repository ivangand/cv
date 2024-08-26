<?php

namespace App\Http\Controllers;

use App\Models\CV; // Menggunakan model CV
use Illuminate\Http\Request;

class CVController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cvs = CV::all();
        return view('cvs.index', compact('cvs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cvs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the input data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'summary' => 'nullable|string',
            'education' => 'nullable|string',
            'experience' => 'nullable|string',
            'skills' => 'nullable|string',
        ]);

        // Only get the fields that are fillable
        $cvData = $request->only([
            'name',
            'email',
            'phone',
            'summary',
            'education',
            'experience',
            'skills',
        ]);

        // Create a new CV record
        CV::create($cvData);

        return redirect()->route('cvs.index')->with('success', 'CV created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cv = CV::findOrFail($id); // Mencari CV berdasarkan ID atau menghasilkan error 404 jika tidak ditemukan
        return view('cvs.show', compact('cv')); // Mengirim data CV ke view
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cv = CV::findOrFail($id); // Mencari CV berdasarkan ID atau menghasilkan error 404 jika tidak ditemukan
        return view('cvs.edit', compact('cv')); // Mengirim data CV ke view
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'summary' => 'nullable|string',
            'education' => 'nullable|string',
            'experience' => 'nullable|string',
            'skills' => 'nullable|string',
        ]);

        $cv = CV::findOrFail($id); // Mencari CV berdasarkan ID

        $cv->update($request->all()); // Memperbarui data CV

        return redirect()->route('cvs.show', $cv->id)->with('success', 'CV berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cv = CV::findOrFail($id); // Mencari CV berdasarkan ID atau menghasilkan error 404 jika tidak ditemukan
        $cv->delete(); // Menghapus data CV dari database

        return redirect()->route('cvs.index')->with('success', 'CV berhasil dihapus');
    }
}
