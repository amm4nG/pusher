<?php

namespace App\Http\Controllers;

use App\Models\Names;
use Faker\Guesser\Name;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index()
    {
        $names = Names::all();
        return view('index', compact(['names']));
    }

    public function view()
    {
        $names = Names::all();
        return view('view', compact(['names']));
    }
}