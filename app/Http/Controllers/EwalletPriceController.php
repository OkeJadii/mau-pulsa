<?php

namespace App\Http\Controllers;

use App\Models\Ewallet;
use App\Models\EwalletPrice;
use Illuminate\Http\Request;

class EwalletPriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.ewalletprice.index', [
            'title' => 'Data Harga E-Wallet',
            'ewalletprices' => EwalletPrice::paginate(6)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ewalletprice.create', [
            'title' => 'Tambah Data Harga Top Up',
            'ewallets' => Ewallet::all()
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
            'nominal' => 'required|min:4|max:255',
            'ewallet_id' => 'required'
        ]);

        EwalletPrice::create($validatedData);

        return redirect('/admin/ewalletprice')->with('success', '<strong>Data Harga Berhasil Di Tambahkan</strong>');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EwalletPrice  $ewalletPrice
     * @return \Illuminate\Http\Response
     */
    public function show(EwalletPrice $ewalletPrice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EwalletPrice  $ewalletPrice
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ewalletPrice = EwalletPrice::findOrFail($id);
        return view('admin.ewalletprice.edit', [
            'title' => 'Edit Data Harga',
            'ewalletPrice' => $ewalletPrice,
            'ewallets' => Ewallet::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EwalletPrice  $ewalletPrice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'nominal' => 'required|min:4|max:255',
            'harga' => 'required|min:4|max:255',
            'ewallet_id' => 'required'
        ];
        $ewalletPrice = EwalletPrice::findOrFail($id);
        $validatedData = $request->validate($rules);

        EwalletPrice::where('id', $ewalletPrice->id)
            ->update($validatedData);

        return redirect('/admin/ewalletprice')->with('success', '<strong>Data Harga Berhasil Di Ubah!</strong>');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EwalletPrice  $ewalletPrice
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ewalletPrice = EwalletPrice::findOrFail($id);
        EwalletPrice::destroy($ewalletPrice->id);

        return redirect('/admin/ewalletprice')->with('success', '<strong>Data Pulsa Telah Berhasil Terhapus!</strong>');;
    }
}
