<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DataMasterController extends Controller
{
    public function users()
    {
        $users = User::with('classes')->get();
        return view('data-masters.users', compact('users'));
    }
}
