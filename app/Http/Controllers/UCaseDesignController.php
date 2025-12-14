<?php

namespace App\Http\Controllers;
use App\Models\Phone;
use Illuminate\Http\Request;

 class UCaseDesignController extends Controller
{
    //

    public function index()
    {
        $phones = Phone::latest()->get();
        return view('ucase-design', compact('phones'));
    }
}
