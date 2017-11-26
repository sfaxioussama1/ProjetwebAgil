<?php

namespace App\Http\Controllers\Api;

use App\Customer;
use App\Http\Controllers\Controller;
use App\Product;
use App\Sale;
use Illuminate\Http\Request;

class CustomerApiController extends Controller
{
    public function store(Request $request) {

        $this->validate($request, [
            'cin' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'phone' => 'required',
            'station_id' => 'required',
            'product_id' => 'required',
            'quantite' => 'required',
        ]);

        $customer = new Customer();

        $customer->cin = $request->cin;
        $customer->nom = $request->nom;
        $customer->prenom = $request->prenom;
        $customer->phone = $request->phone;

        $customer->save();

        $sale = new Sale();

        $sale->customer_id = $customer->id;
        $sale->station_id = $request->station_id;
        $sale->product_id = $request->product_id;
        $sale->quantite = $request->quantite;

        $sale->save();

        // mail

        return response()->json([
            "message" => "produit ajouté"
        ]);

    }

}
