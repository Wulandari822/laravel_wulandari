<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;
use App\Models\RumahSakit;

class PasienController extends Controller
{
    public function index(Request $request)
    {
        $rumahSakits = RumahSakit::all();

        $query = Pasien::with('rumahSakit');

        if ($request->has('rumah_sakit_id') && $request->rumah_sakit_id != '') {
            $query->where('rumah_sakit_id', $request->rumah_sakit_id);
        }

        $pasiens = $query->paginate(10)->withQueryString();

        if ($request->ajax()) {
        return view('pasien.partials.table', compact('pasiens'))->render();
        }


        return view('pasien.index', compact('pasiens', 'rumahSakits'));
    }

    public function create()
    {
        $rumahSakits = RumahSakit::all();
        return view('pasien.create', compact('rumahSakits'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'rumah_sakit_id' => 'required|exists:rumah_sakits,id',
        ]);

        Pasien::create($request->all());

        return redirect()->route('pasien.index')->with('success', 'Pasien berhasil ditambahkan.');
    }

    public function show($id)
    {
        $pasien = Pasien::with('rumahSakit')->findOrFail($id);
        return view('pasien.show', compact('pasien'));
    }

    public function destroy($id)
    {
        $pasien = Pasien::findOrFail($id);
        $pasien->delete();

        return response()->json(['success' => true]);
    }
}
