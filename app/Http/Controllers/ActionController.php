<?php

namespace App\Http\Controllers;

use App\Models\Action;
use Illuminate\Http\Request;

class ActionController extends Controller
{
    public function add(Request $request)
    {
        $action = new Action();
        $action->fixedDisplacementAmount = $request->fixedDisplacementAmount;
        $action->percentageDisplacementAmount = $request->percentageDisplacementAmount;
        $action->maximumDisplacementAmount = $request->maximumDisplacementAmount;
        $action->save();

        return response()->json([
            'status' => true,
            'message' => "Action added successfully."
        ]);
    }

    public function all() {
        return response()->json(Action::all());
    }
}
