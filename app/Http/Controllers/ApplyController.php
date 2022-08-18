<?php

namespace App\Http\Controllers;

use App\Models\Action;
use App\Models\Condition;
use App\Models\Rule;
use Illuminate\Http\Request;

class ApplyController extends Controller
{
    public function apply(Request $request)
    {
        $oldPrice = $request->price;
        $conditions = $request->except('price');
        $rules = Rule::all();

        $appliedRules = [];

        $sequence = 1;
        foreach ($rules as $rule) {
            $condition = Condition::find($rule->condition_id);

            $flag = true;
            foreach ($conditions as $key => $value) {
                if ($condition->$key != $value) {
                    $flag = false;
                    break;
                }
            }
            if ($flag) {
                $action = Action::find($rule->action_id);
                $coef = 1;
                if ($rule->type == "DISCOUNT") {
                    $coef = -1;
                }
                $newPrice = $oldPrice + ($coef * min(
                    $action->fixedDisplacementAmount + $oldPrice * ($action->percentageDisplacementAmount / 100),
                    $action->maximumDisplacementAmount
                ));

                $appliedRules[] = [
                    'id' => $rule->id,
                    'name' => $rule->name,
                    'sequence' => $sequence++,
                    'oldPrice' => $oldPrice,
                    'newPrice' => $newPrice,
                    'displacement' => abs($newPrice - $oldPrice)
                ];

                $oldPrice = $newPrice;
                
            }
        }
        return response()->json([
            'applied' => !empty($appliedRules),
            'appliedRules' => $appliedRules
        ]);
    }
}
