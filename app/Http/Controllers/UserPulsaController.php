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
        }

        return view('user.pulsa.pulsa', [
            "title" => "Pembelian Pulsa " . $title,
            "pulsa" => Pulsa::filter(request(["provider"]))->get(),
            "provider" => $title
        ]);
    }
}
