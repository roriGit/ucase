<?php

namespace App\Http\Controllers;
use App\Models\Phone;
use App\Models\PhoneCase;
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

    public function welcome()
    {
        $iphone = Phone::where('model', 'LIKE', '%iPhone%')
                ->latest()
                ->get();
        $huawei = Phone::where('model', 'LIKE', '%Samsung%')
                ->latest()
                ->get();
        $samsung = Phone::where('model', 'LIKE', '%Huawei%')
                ->latest()
                ->get();
        return view('welcome', compact(var_name: ['iphone', 'huawei', 'samsung']));
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
    return view('phones-edit', compact('phone'));
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

public function create_design(Request $request)
{
    $phones = null;
    if($request->has('model')&&$request->has('phone')){
        $phone = Phone::where('id', $request->model)->first();
        return view('phone-case-design', compact('phone'));
    }
    if($request->phone=='iPhone'){
        $phones = Phone::where('model', 'LIKE', '%iPhone%')
                ->latest()
                ->get();
    }
    if($request->phone=='Samsung'){
        $phones = Phone::where('model', 'LIKE', '%Samsung%')
                ->latest()
                ->get();
    }
    if($request->phone=='Huawei'){
        $phones = Phone::where('model', 'LIKE', '%Huawei%')
                ->latest()
                ->get();
    }
    $phone_type = $request->phone;
    return view('phone-type-case-design', compact('phones', 'phone_type'));
}

    public function store_case_design(Request $request)
    {
       // dd($request->all());
        $request->validate([
            'phone_id'   => 'required|integer|min:1',
            'firstname' => 'required|string|max:255',
            'contact' => 'required|string',
            'lastname' => 'required|string|max:255',
            'email'  => 'required|email|max:50',
            'delivery_address' => 'required|string|max:1020',
            'case_image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $data = $request->only(['phone_id', 'firstname', 'lastname', 'contact', 'email', 'delivery_address']);
        //dd($data);
        if ($request->hasFile('case_image')) {
            $path = $request->file('case_image')->store('images/phone-case', 'public');
            $data['case_image'] = 'storage/' . $path;
        }

        PhoneCase::create($data);
        return redirect()->back()->with('success', 'Design request sent and we will be in-touch!');
    }

    public function phone_case_requests_status_change(Request $request, PhoneCase $phoneCase){
    $request->validate([
        'id'   => 'required|integer|min:0',
        'status' => 'required|integer|min:0',
    ]);

    $data['contact_made'] = $request->status;
    $case = PhoneCase::find($request->id);
    $case->update($data);
    return redirect()->back(); 
    }

    public function phone_case_requests(){
        $phone_cases = PhoneCase::select('phone_cases.*', 'phones.model')
            ->leftJoin('phones', 'phones.id', '=', 'phone_cases.phone_id')
            ->orderBy('phone_cases.updated_at', 'DESC')
            ->get();

        //dd($phone_cases);
        return view('auth.case-requests-list', compact('phone_cases'));
    }

    public function contact(){
        return view('contact');
    }
}