<?php

namespace App\Http\Controllers;

use App\Models\Provider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.provider.index', [
            'title' => 'Data Provider Pulsa',
            'providers' => Provider::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.provider.create', [
            'title' => 'Tambah Data Provider'
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
            $validatedData['icon'] = $request->file('icon')->store('provider-icon');
        }

        Provider::create($validatedData);

        return redirect('/admin/provider')->with('success', '<strong>Data Provider Berhasil Di Tambahkan</strong>');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function show(Provider $provider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function edit(Provider $provider)
    {
        return view('admin.provider.edit', [
            'title' => 'Edit Data Provider',
            'provider' => $provider
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Provider $provider)
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
            $validatedData['icon'] = $request->file('icon')->store('provider-icon');
        }

        Provider::where('id', $provider->id)
            ->update($validatedData);

        return redirect('/admin/provider')->with('success', '<strong>Data Provider Berhasil Di Ubah!</strong>');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Provider $provider)
    {
        if ($provider->icon) {
            Storage::delete($provider->icon);
        }

        Provider::destroy($provider->id);

        return redirect('/admin/provider')->with('success', '<strong>Data Provider Telah Berhasil Terhapus!</strong>');;
    }
}
