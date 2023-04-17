<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $acc = Game::where('status', 0)->orderBy('id', 'DESC')->limit(8)->get();
       return view('Client/index', compact('acc'));
    }
}
