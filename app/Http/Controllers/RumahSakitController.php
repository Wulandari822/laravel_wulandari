<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RumahSakit;

class RumahSakitController extends Controller
{
    public function index()
    {
        $data = RumahSakit::paginate(10); 

        return view('rumahsakit.index', compact('data'));
    }


    public function create()
    {
        return view('rumahsakit.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string',
            'email' => 'required|email|unique:rumah_sakits',
            'telepon' => 'required|string|max:20',
        ]);

        RumahSakit::create($request->all());
        return redirect()->route('rumahsakit.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $rs = RumahSakit::findOrFail($id);
        return view('rumahsakit.edit', compact('rs'));
    }

    public function update(Request $request, $id)
    {
        $rs = RumahSakit::findOrFail($id);

        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string',
            'email' => 'required|email|unique:rumah_sakits,email,' . $rs->id,
            'telepon' => 'required|string|max:20',
        ]);

        $rs->update($request->all());
        return redirect()->route('rumahsakit.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function show($id)
    {
        $rs = RumahSakit::findOrFail($id);
        return view('rumahsakit.show', compact('rs'));
    }

    public function destroy($id)
    {
        $rs = RumahSakit::findOrFail($id);
        $rs->delete();

        return response()->json(['success' => true]);
    }
}
