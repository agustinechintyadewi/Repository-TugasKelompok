<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hewan;

class hewanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hewan = hewan::orderBy('created_at', 'DESC')->get();
  
        return view('hewan.index', compact('hewan'));
    }

    public function indexUser()
    {
        $hewan = hewan::orderBy('created_at', 'DESC')->get();
  
       
        return view('user.detailShelter', compact('hewan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function tambah()
    {
        return view ('hewan.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        hewan::create($request->all());
 
        return redirect()->route('hewan')->with('success', 'hewan berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $hewan = hewan::findOrFail($id);
  
        return view('hewan.edit', compact('hewan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $hewan = hewan::findOrFail($id);
  
        $hewan->update($request->all());
  
        return redirect()->route('hewan')->with('success', 'Data hewan berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $hewan = hewan::findOrFail($id);
  
        $hewan->delete();
  
        return redirect()->route('hewan')->with('success', 'Data hewan berhasil dihapus!');
    }
}
