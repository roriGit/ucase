@extends('layouts.app-admin')
@section('content')
    <div class="min-w-screen grid-col-1 mx-auto mt-10 min-h-100">
        <h3 class="text-3xl font-bold mb-6 text-center px-10">Case Requests</h3>

        <!-- Success message -->
        @if(session('success'))
            <div class="bg-green-100 text-green-800 p-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <!-- Add Phone Form -->
        {{-- <form action="{{ route('phones.store') }}" method="POST" enctype="multipart/form-data"
            class="mb-6 bg-white p-6 rounded shadow">

            @csrf

            <div class="grid grid-cols-3 gap-4 mb-4">
                <input type="text" name="model" placeholder="Model" class="border p-2 rounded" required>

                <input type="text" name="unit" placeholder="Unit" class="border p-2 rounded" required>

                <input type="number" name="qty" placeholder="Qty" class="border p-2 rounded" required>
            </div>

            <!-- Drag & Drop Image Upload -->
            <div class="border-2 border-dashed rounded-lg p-6 text-center cursor-pointer
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   hover:border-blue-500 transition relative"
                onclick="document.getElementById('image').click()" ondragover="event.preventDefault()"
                ondrop="handleDrop(event)">
                <img id="preview" class="hidden mx-auto mb-3 max-h-32 object-contain" />

                <p id="upload-text" class="text-gray-600">
                    Drag & drop image here or <span class="text-blue-600 font-semibold">click to upload</span>
                </p>

                <p id="file-name" class="text-sm text-gray-500 mt-2"></p>
            </div>

            <input type="file" name="image" id="image" accept="image/*" class="hidden" onchange="previewImage(this)">

            <button type="submit" class="mt-6 bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                Add Phone
            </button>
        </form> --}}


        <!-- Phones Table -->
        <div class="bg-white shadow rounded overflow-scroll min-w-screen px-10">

            {{-- <div class="grid grid-cols-6 gap-4 mb-4">
                <div class="center bg-red-500">Design Not Approved</div>
                <div class="center bg-amber-500">Pending Contact</div>
                <div class="center bg-emerald-600">Contact Made</div>
                <div class="center bg-cyan-600">Design Approved</div>
                <div class="center bg-blue-500">Case Manufactured</div>
                <div class="center bg-green-500">Case Delivered</div>
            </div> --}}
            <table class="min-w-full table-auto text-sm">
                <thead class="bg-gray-200">
                    <tr>
                        {{-- <th class="px-4 py-2 text-left">Status</th> --}}
                        <th class="px-4 py-2 text-left">Status</th>
                        <th class="px-4 py-2 text-left">Date</th>
                        <th class="px-4 py-2 text-left">Model</th>
                        <th class="px-4 py-2 text-left">Full Name</th>
                        <th class="px-4 py-2 text-left">Contact</th>
                        <th class="px-4 py-2 text-left">Email</th>
                        <th class="px-4 py-2 text-left">Case</th>
                        <th class="px-4 py-2 text-left">Address</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($phone_cases as $case)
                        <tr class="border-b">
                            <td>
                                <form name="statusChangeAdmin" id="statusChangeAdmin"
                                    action="{{ route('admin.phone_case_requests.status_change') }}" method="POST">
                                    @csrf
                                    @method('POST')
                                    <input type="hidden" name="id" value="{{ $case->id }}">
                                    <select name="status" onchange="submitStatusChange(event)">
                                        <option @if ($case->contact_made == 0) selected @endif value="0">Pending</option>
                                        <option @if ($case->contact_made == 1) selected @endif value="1">Contact</option>
                                        <option @if ($case->contact_made == 2) selected @endif value="2">Disapproved</option>
                                        <option @if ($case->contact_made == 3) selected @endif value="3">Approved</option>
                                        <option @if ($case->contact_made == 4) selected @endif value="4">Making</option>
                                        <option @if ($case->contact_made == 5) selected @endif value="5">Delivered</option>
                                    </select>
                                    <button type="submit" id="statusChangeAdminBttn"></button>
                                </form>
                            </td>
                            {{-- <td>

                                @if ($case->contact_made == 0)
                                <div class="w-24 h-24 bg-black text-white">Pending Contact</div>
                                @elseif ($case->contact_made == 1)
                                <div class=" w-24 h-24 bg-red-600 text-white">Disapproved Design</div>
                                @elseif ($case->contact_made == 2)
                                <div class=" w-24 h-24 bg-emerald-400">Contact Made</div>
                                @elseif ($case->contact_made == 3)
                                <div class=" w-24 h-24 bg-green-300">Approved Design</div>
                                @elseif ($case->contact_made == 4)
                                <div class=" w-24 h-24 bg-blue-400">Created Case</div>
                                @elseif ($case->contact_made == 5)
                                <div class=" w-24 h-24 bg-yellow-400">Delivered Case</div>
                                @endif
                            </td> --}}
                            <td class="px-4 py-2">{{ $case->created_at }}</td>
                            <td class="px-4 py-2">{{ $case->model }}</td>
                            <td class="px-4 py-2">{{ $case->firstname }}&nbsp;{{ $case->lastname }}</td>
                            <td class="px-4 py-2">{{ $case->contact }}</td>
                            <td class="px-4 py-2">{{ $case->email }}</td>
                            <td class="px-4 py-2">@if($case->case_image)
                                <img src="{{ asset($case->case_image) }}" class="w-16 h-16 object-contain"
                                    alt="{{ $case->model }}">
                            @endif
                            </td>
                            <td class="px-4 py-2">{{ $case->delivery_address }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection