<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ewallet;
use App\Models\EwalletPrice;
use App\Models\Transaction;

class UserEwalletController extends Controller
{
    public function index()
    {
        $title = '';
        if (request('ewallet')) {
            $ewallet = Ewallet::firstWhere('slug', request("ewallet"));
            $title = $ewallet->name;
            $icon = $ewallet->icon;
        }

        return view('user.ewallet.ewalletprice', [
            "title" => "Top Up Saldo " . $title,
            "ewalletprices" => EwalletPrice::filter(request(["ewallet"]))->get(),
            "ewallet" => $title,
            "icon" => $icon
        ]);
    }

    public function detail(Request $request)
    {
        $produk = $request['nominal'];
        $produk = explode('-', $produk);
        $ewallet = $request['ewallet'];
        $noHp = $request['noHp'];

        return view('user.ewallet.detail', [
            "title" => "Detail Pembelian",
            "noHp" => $noHp,
            "ewallet" => $ewallet,
            "nominal" => $produk[0],
            "harga" => $produk[1]
        ]);
    }

    public function transaction(Request $request)
    {
        $validatedData = $request->validate([
            'produk' => 'required|max:255',
            'no_pelanggan' => 'required|max:255',
            'nominal' => 'required|max:255',
            'harga' => 'required|max:255',
            'email' => 'required|max:255',
            'user_id' => 'max:5'
        ]);

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['jenis'] = "ewallet";

        Transaction::create($validatedData);

        return view('user.ewallet.bayar', [
            "title" => "Pembayaran Pulsa",
            "produk" => $request["produk"],
            "noHp" => $request["no_pelanggan"],
            "nominal" => $request["nominal"],
            "harga" => $request["harga"]
        ]);
    }
}
