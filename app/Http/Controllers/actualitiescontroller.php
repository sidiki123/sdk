<?php

namespace App\Http\Controllers;

use App\Models\actuality;
use Illuminate\Http\Request;


class actualitiescontroller extends Controller
{

    public function create()
    {
        return view('/admin/actualities');
    }

    public function store(REQUEST $request)
    {
        Actuality::create([
            'titre' => $request->titre,
            'photo' => $request->photo,
            'date' => $request->date,
            'newsactu' => $request->newsactu,
        ]);

        return view('success');
    }

    public function show()
    {
        return view('/admin/actualities');
    }

    public function index()
    {
        $actualities = Actuality::all();
        return view('/admin/actualities', compact('actualities'));
    }

    
    

    
    
}
