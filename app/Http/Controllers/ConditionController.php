<?php

namespace App\Http\Controllers;

use App\Models\Condition;
use Illuminate\Http\Request;

class ConditionController extends Controller
{
    public function add(Request $request) {
        $inputs = config('app.inputs');
        $condition = new Condition();
        foreach($inputs as $key => $value) {
            $condition->$key = $request->$key;
        }
        $condition->save();
        return response()->json([
            'status' => true,
            'message' => "Condition added successfully."
        ]);
    }

    public function all() {
        return response()->json(Condition::all());
    }
}
