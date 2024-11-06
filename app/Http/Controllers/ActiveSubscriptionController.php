<?php

namespace App\Http\Controllers;

use App\Models\ActiveSubscription;
use Illuminate\Http\Request;

class ActiveSubscriptionController extends Controller
{
    public function index()
    {
        return ActiveSubscription::all();
    }

    public function store()
    {

    }
}
