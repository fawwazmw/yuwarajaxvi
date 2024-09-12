<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProdiController extends Controller
{
    public function index()
    {
        $prodis = Prodi::all();
        return view('data-masters.prodis', compact('prodis'));
    }

    public function create()
    {
        return view('data-masters.prodis-add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $prodi = Prodi::create($request->all());

        Log::info('Prodi added: ' . $prodi);

        return redirect()->route('prodis.index')->with('success', 'Buset ada prodi baru ni bos');
    }

    public function edit($id)
    {
        $prodi = Prodi::findOrFail($id);
        return view('data-masters.prodis-edit', compact('prodi'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $prodi = Prodi::findOrFail($id);
        $prodi->update($request->all());

        Log::info('Prodi updated: ' . $prodi);

        return redirect()->route('prodis.index')->with('success', 'Prodi berhasil di perbarui bos!');
    }

    public function destroy($id)
    {
        $prodi = Prodi::findOrFail($id);
        $prodi->delete();

        Log::info('Prodi deleted: ' . $prodi);

        return redirect()->route('prodis.index')->with('success', 'Waw prodi berhasil dihilangkan!');
    }
}
