<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiControlador extends Controller
{
    public function getUser(Request $request) {
        return response()->json(['dni' => $request->dni], 200);
    }


    public function addUser(Request $request) {
        return response()->json(['nombre' => $request->get('usuario')], 201);
    }
}
