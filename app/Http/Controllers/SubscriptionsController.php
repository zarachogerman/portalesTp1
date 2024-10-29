<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Plan;

class SubscriptionsController extends Controller
{
    public function subscriptions()
    {
        $plans = Plan::all();
        return view('subscriptions', [
            'book_plans' => $plans
        ]);
    }
}
