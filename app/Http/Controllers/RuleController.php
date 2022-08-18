<?php

namespace App\Http\Controllers;

use App\Models\Rule;
use Illuminate\Http\Request;

class RuleController extends Controller
{
    public function add(Request $request)
    {
        $rule = new Rule();
        $rule->name = $request->name;
        $rule->type = $request->type;
        $rule->condition_id = $request->condition_id;
        $rule->action_id = $request->action_id;
        $rule->save();


        return response()->json([
            'status' => true,
            'message' => "Rule added successfully."
        ]);
    }

    public function all() {
        return response()->json(Rule::all());
    }
}
