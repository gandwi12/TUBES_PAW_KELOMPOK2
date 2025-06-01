<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Obat;

class ObatApiController extends Controller
{
    public function index()
    {
        return response()->json(Obat::all());
    }
}
