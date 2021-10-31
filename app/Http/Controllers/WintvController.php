<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;

class WintvController extends Controller
{
    public function index (){
        $plans = Plan::where('front',1)->get();

        return view('wintv.index', compact('plans'));
    }
    public function we() {

    }
    public function services() {

    }
    public function promotions() {

    }
    public function pay() {

    }
    public function payweb() {

    }
    public function paypaycash() {

    }
    public function paybbva() {

    }
    public function paybcp() {

    }
    public function rules (){

    }
    public function sanctions(){

    }
}
