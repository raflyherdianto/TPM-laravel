<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Gudang;
use Illuminate\Http\Request;

class GudangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.gudang.index', [
            'title' => 'Data Gudang',
            'gudangs' => Gudang::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.gudang.create', [
            'title' => 'Tambah Data Gudang',
            'barangs' => Barang::all(),
            //
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'kode_gudang'=>'required',
            'barang_id'=>'required',
            'stok'=>'required',
        ]);
        Gudang::create($validateData);
        return redirect('/dashboard/gudang');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gudang  $gudang
     * @return \Illuminate\Http\Response
     */
    public function show(Gudang $gudang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gudang  $gudang
     * @return \Illuminate\Http\Response
     */
    public function edit(Gudang $gudang)
    {
        return view('dashboard.gudang.edit', [
            'title' => 'Edit Data Gudang',
            'gudang'=>$gudang,
            'barangs'=>Barang::all(),
            //
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gudang  $gudang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gudang $gudang)
    {
        $rules = [
            'barang_id' => 'required',
            'stok' => 'required',
        ];

        if ($request->kode_gudang != $gudang->kode_gudang) {
            $rules['kode_gudang'] = 'required';
        }

        if ($request->barang_masuk) {
            $rules['barang_masuk'] = 'required';
            // (int)$rules['stok'] += (int)$rules['barang_masuk'];
        }

        if ($request->barang_keluar) {
            $rules['barang_keluar'] = 'required';
        }

        $validatedData = $request->validate($rules);

        Gudang::where('id', $gudang->id)->update($validatedData);

        $gudangUpdate = Gudang::where('id', $gudang->id)->first();

        if ($request->barang_masuk) {
            $gudangUpdate->stok += $gudangUpdate->barang_masuk;
        }

        if ($request->barang_keluar) {
            $gudangUpdate->stok -= $gudangUpdate->barang_keluar;
        }


        $gudangUpdate->update();

        return redirect('/dashboard/gudang');
        // ->with('success', 'Category has been updated')
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gudang  $gudang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gudang $gudang)
    {
        //
    }
}
