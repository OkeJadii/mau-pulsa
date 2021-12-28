<?php

namespace App\Http\Controllers;

use App\Models\Ewallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EwalletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.ewallet.index', [
            'title' => 'Data E-Wallet',
            'ewallets' => Ewallet::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ewallet.create', [
            'title' => 'Tambah Data E-Wallet'
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
            'name' => 'required|min:2|max:20',
            'slug' => 'required|min:2|max:20',
            'icon' => 'required|image|file|max:1024'
        ]);

        if ($request->file('icon')) {
            $validatedData['icon'] = $request->file('icon')->store('ewallet-icon');
        }

        Ewallet::create($validatedData);

        return redirect('/admin/ewallet')->with('success', '<strong>Data E-Wallet Berhasil Di Tambahkan</strong>');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ewallet  $ewallet
     * @return \Illuminate\Http\Response
     */
    public function show(Ewallet $ewallet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ewallet  $ewallet
     * @return \Illuminate\Http\Response
     */
    public function edit(Ewallet $ewallet)
    {
        return view('admin.ewallet.edit', [
            'title' => 'Edit Data Provider',
            'ewallet' => $ewallet
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ewallet  $ewallet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ewallet $ewallet)
    {
        $rules = [
            'name' => 'required|min:2|max:255',
            'slug' => 'required|min:2|max:255',
            'icon' => 'required|image|file|max:1024'
        ];

        $validatedData = $request->validate($rules);

        if ($request->file('icon')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['icon'] = $request->file('icon')->store('ewallet-icon');
        }

        Ewallet::where('id', $ewallet->id)
            ->update($validatedData);

        return redirect('/admin/ewallet')->with('success', '<strong>Data E-Wallet Berhasil Di Ubah!</strong>');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ewallet  $ewallet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ewallet $ewallet)
    {
        if ($ewallet->icon) {
            Storage::delete($ewallet->icon);
        }

        Ewallet::destroy($ewallet->id);

        return redirect('/admin/ewallet')->with('success', '<strong>Data E-Wallet Telah Berhasil Terhapus!</strong>');
    }
}
