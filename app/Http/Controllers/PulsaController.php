<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pulsa;
use Illuminate\Http\Request;

class PulsaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pulsa.index', [
            'title' => 'Data Harga Pulsa',
            'prices' => Pulsa::paginate(6)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pulsa.create', [
            'title' => 'Tambah Data Pulsa'
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
        $validatedData = $request->validate([
            'harga' => 'required|min:4|max:255',
            'nominal' => 'required|min:4|max:255'
        ]);

        Pulsa::create($validatedData);

        return redirect('/admin/pulsa')->with('success', '<strong>Data Pulsa Berhasil Di Tambahkan</strong>');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pulsa  $pulsa
     * @return \Illuminate\Http\Response
     */
    public function show(Pulsa $pulsa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pulsa  $pulsa
     * @return \Illuminate\Http\Response
     */
    public function edit(Pulsa $pulsa)
    {
        return view('admin.pulsa.edit', [
            'title' => 'Edit Data Pulsa',
            'pulsa' => $pulsa
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pulsa  $pulsa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pulsa $pulsa)
    {
        $rules = [
            'nominal' => 'required|min:4|max:255',
            'harga' => 'required|min:4|max:255'
        ];

        $validatedData = $request->validate($rules);

        Pulsa::where('id', $pulsa->id)
            ->update($validatedData);

        return redirect('/admin/pulsa')->with('success', '<strong>Data Pulsa Berhasil Di Ubah!</strong>');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pulsa  $pulsa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pulsa $pulsa)
    {
        Pulsa::destroy($pulsa->id);

        return redirect('/admin/pulsa')->with('success', '<strong>Data Pulsa Telah Berhasil Terhapus!</strong>');;
    }
}
