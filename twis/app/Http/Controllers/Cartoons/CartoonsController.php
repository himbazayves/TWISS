<?php

namespace App\Http\Controllers\Cartoons;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Cartoon;

class CartoonsController extends Controller
{
    function index(){

        $cartoons= Cartoon::all();

        return view('cartoons.index',['cartoons'=>$cartoons]);
    }
}
