<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kursi;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{
    public function store (Request $request){
            $validet = $request->validet([
                'nosaukums' => 'required|string',
                'teksts' => 'required|string',
                'adrese' => 'required|string',
                'cilv_skaits' => 'required|integer',
            ]);

            $kursi = Kursi::create($validet);
            return respone() -> json($kursi);

    }

    public function index(){
        $kursi = Kursi::all();
        return respone() ->json($kursi);
    }
}
