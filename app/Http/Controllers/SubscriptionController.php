<?php

namespace App\Http\Controllers;

use App\Subscription;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function create()
    {
        return view('subscription.create');
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'email' => 'required|email|unique:subscriptions',
        ]);

        Subscription::create($request->all());

        return redirect()->back()->with('success', 'Вы успешно подписались на рассылку.');
    }
}
