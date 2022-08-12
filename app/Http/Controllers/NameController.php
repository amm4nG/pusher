<?php

namespace App\Http\Controllers;

use App\Events\ChatEvent;
use App\Models\Names;
use Illuminate\Http\Request;

class NameController extends Controller
{
    public function index()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $names = new Names();
        $names->name = $request->name;
        $names->save();
        ChatEvent::dispatch($names);
        // event(new ChatEvent($names));
        return redirect('data');
    }
}