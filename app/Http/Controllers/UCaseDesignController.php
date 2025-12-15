<?php

namespace App\Http\Controllers;
use App\Models\Phone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
public function edit(Phone $phone)
{
    return view('phones.edit', compact('phone'));
}

public function update(Request $request, Phone $phone)
{
    $request->validate([
        'model' => 'required|string|max:255',
        'unit'  => 'required|string|max:50',
        'qty'   => 'required|integer|min:0',
        'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
    ]);

    $data = $request->only(['model', 'unit', 'qty']);

    if ($request->hasFile('image')) {

        // Delete old image
        if ($phone->image) {
            Storage::disk('public')->delete(
                str_replace('storage/', '', $phone->image)
            );
        }

        // Store new image
        $path = $request->file('image')->store('images/phones', 'public');
        $data['image'] = 'storage/' . $path;
    }

    $phone->update($data);

    return redirect()->route('phones.index')
        ->with('success', 'Phone updated successfully!');
}
public function destroy(Phone $phone)
{
    if ($phone->image) {
        Storage::disk('public')->delete(
            str_replace('storage/', '', $phone->image)
        );
    }

    $phone->delete();

    return redirect()->back()->with('success', 'Phone deleted successfully!');
}

}
