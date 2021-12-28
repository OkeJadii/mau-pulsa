<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pulsa;
use App\Models\Provider;

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

        $test = [
            'noHp' => $noHp,
            'provider' => $provider,
            'nominal' => $produk[0],
            'harga' => $produk[1]
        ];

        dd($test);

        // return view('user.pulsa', [
        //     "title" => "Detail Pembelian",
        //     "noHp" => $noHp,
        //     "provider" => $provider,
        //     "nominal" => $produk[0],
        //     "harga" => $produk[1]
        // ]);
    }
}
