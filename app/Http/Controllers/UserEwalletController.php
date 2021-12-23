<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ewallet;
use App\Models\EwalletPrice;

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
}
