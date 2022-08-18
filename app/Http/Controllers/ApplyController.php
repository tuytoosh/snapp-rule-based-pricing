<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplyController extends Controller
{
    public function apply(Request $request) {
        $price = $request->price;
        $conditions = $request->except('price');
        dd($conditions);
    }
}
