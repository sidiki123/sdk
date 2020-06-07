<?php

namespace App\Http\Controllers;

use App\Models\Evenement;
use Illuminate\Http\Request;

class evenementscontroller extends Controller
{

    public function create()
    {
        return view('/admin/evenements');
    }

    public function store(REQUEST $request)
    {
       Evenement::create([
            'titre' => $request->titre,
            'evendate' => $request->evendate,
            'heure' => $request->heure,
            'lieu' => $request->lieu,
            'evencontenu' => $request->evencontenu
        ]);

        return view('success');
    }

    public function show()
    {
        return view('/admin/evenements');
    }

    public function index()
    {
        $evenements = Evenement::all();
        return view('/admin/evenements', compact('evenements'));
    }
}
