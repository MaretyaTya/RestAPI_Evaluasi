<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CustomerController extends Controller
{
    public function getDataApi()
    {
        $collection = Http::get('https://masak-apa.tomorisakura.vercel.app/api/recipes')['results'];
        return view('customers', ['collection' => $collection]);
    }
}
