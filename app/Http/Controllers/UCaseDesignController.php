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

    public function list()
    {
        $phones = Phone::latest()->get();
        return view('phones-list', compact('phones'));
    }
    

public function store(Request $request)
{
    $request->validate([
        'model' => 'required|string|max:255',
        'unit'  => 'required|string|max:50',
        'qty'   => 'required|integer|min:0',
        'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
    ]);

    $data = $request->only(['model', 'unit', 'qty']);

    if ($request->hasFile('image')) {
        $path = $request->file('image')->store('images/phones', 'public');
        $data['image'] = 'storage/' . $path;
    }

    Phone::create($data);

    return redirect()->back()->with('success', 'Phone added successfully!');
}

}
