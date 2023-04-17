<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function seller()
    {
        $seller = User::where('role', 'seller')->orderBy('rank', 'DESC')->get();
        return view('Dashboard/Admin/seller', compact('seller'));
    }
}
