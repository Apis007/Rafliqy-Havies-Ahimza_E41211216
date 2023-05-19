<?php

namespace App\Http\Controllers;

use App\Models\religi;
use Illuminate\Http\Request;

class ReligiController extends Controller
{
    // menampilkan data
    public function index()
    {
        $religis = religi::all();
        return view('backend.religi.index', compact('religis'));
    }

    public function create()
    {
        return view('backend.religi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'tahun' => 'required',
            'no_telp' => 'required',
        ]);

        religi::create($request->all());

        return redirect()->route('religi.index')
            ->with('success', 'Data baru telah berhasil disimpan');
    }

    public function edit($id)
    {
        $religi = religi::find($id);
        return view('backend.religi.edit', compact('religi'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'tahun' => 'required',
            'no_telp' => 'required',
        ]);

        $religi = religi::find($id);
        $religi->update($request->all());

        return redirect()->route('religi.index')
            ->with('success', 'Data telah berhasil diperbarui');
    }

    public function destroy($id)
    {
        $religi = religi::find($id);
        $religi->delete();

        return redirect()->route('religi.index')
            ->with('success', 'Data telah berhasil dihapus');
    }
}
