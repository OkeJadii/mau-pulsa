<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pulsa;
use App\Models\Provider;
use App\Models\Transaction;

class UserPulsaController extends Controller
{
    public function index()
    {
        $title = '';
        if (request('provider')) {
            $provider = Provider::firstWhere('slug', request("provider"));
            $title = $provider->name;
            $icon = $provider->icon;
        }

        return view('user.pulsa.pulsa', [
            "title" => "Pembelian Pulsa " . $title,
            "pulsa" => Pulsa::filter(request(["provider"]))->get(),
            "provider" => $title,
            "icon" => $icon
        ]);
    }

    public function detail(Request $request)
    {
        $produk = $request['nominal'];
        $produk = explode('-', $produk);
        $provider = $request['provider'];
        $noHp = $request['noHp'];

        return view('user.pulsa.detail', [
            "title" => "Detail Pembelian",
            "noHp" => $noHp,
            "provider" => $provider,
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
            'email' => 'required|max:255'
        ]);

        $validatedData['user_id'] = auth()->user()->id;

        Transaction::create($validatedData);

        // return redirect('/bayar/pulsa');

        return view('user.pulsa.bayar', [
            "title" => "Pembayaran Pulsa",
            "produk" => $request["produk"],
            "noHp" => $request["no_pelanggan"],
            "nominal" => $request["nominal"],
            "harga" => $request["harga"]
        ]);
    }
}
