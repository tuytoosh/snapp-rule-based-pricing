<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Action;
use App\Models\Condition;
use App\Models\Rule;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $condition = new Condition();
        $condition->userType = "B2B";
        $condition->channelType = 'Snapp';
        $condition->minPrice = 10000;
        $condition->save();

        $condition = new Condition();
        $condition->userType = "B2C";
        $condition->channelType = 'Ap';
        $condition->minPrice = 20000;
        $condition->save();

        $action = new Action();
        $action->fixedDisplacementAmount = 20000;
        $action->percentageDisplacementAmount = 10;
        $action->maximumDisplacementAmount = 25000;
        $action->save();

        Action::create([
            'fixedDisplacementAmount' => 10000,
            'percentageDisplacementAmount' => 10,
            'maximumDisplacementAmount' => 25000,
        ]);

        $rule = new Rule();
        $rule->name = "Markup test";
        $rule->type = "MARKUP";
        $rule->condition_id = 1;
        $rule->action_id = 1;
        $rule->save();


        $rule = new Rule();
        $rule->name = "Discount test";
        $rule->type = "DISCOUNT";
        $rule->condition_id = 2;
        $rule->action_id = 1;
        $rule->save();

        Rule::create([
            'name' => "Markup 2",
            'type' => "MARKUP",
            'condition_id' => 2,
            'action_id' => 2
        ]);
    }
}
