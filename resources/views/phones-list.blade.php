@extends('layouts.app-admin')
@section('content')
    <div class="max-w-4xl mx-auto mt-10 min-h-100  overflow-scroll">
        <h1 class="text-3xl font-bold mb-6 text-center">Phones Inventory</h1>

        <!-- Success message -->
        @if(session('success'))
            <div class="bg-green-100 text-green-800 p-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <!-- Add Phone Form -->
        <form action="{{ route('phones.store') }}" method="POST" enctype="multipart/form-data"
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
        </form>


        <!-- Phones Table -->
        <div class="bg-white shadow rounded overflow-scroll">
            <table class="min-w-full table-auto">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="px-4 py-2 text-left">ID</th>
                        <th class="px-4 py-2 text-left">Model</th>
                        <th class="px-4 py-2 text-left">Unit</th>
                        <th class="px-4 py-2 text-left">Qty</th>
                        <th class="px-4 py-2 text-left">Image</th>
                        <th class="px-4 py-2 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($phones as $phone)
                        <tr class="border-b">
                            <td class="px-4 py-2">{{ $phone->id }}</td>
                            <td class="px-4 py-2">{{ $phone->model }}</td>
                            <td class="px-4 py-2">{{ $phone->unit }}</td>
                            <td class="px-4 py-2">{{ $phone->qty }}</td>
                            <td class="px-4 py-2">@if($phone->image)
                                <img src="{{ asset($phone->image) }}" class="w-16 h-16 object-contain"
                                    alt="{{ $phone->model }}">
                            @endif
                            </td>
                            <td>
                                <form action="{{ route('phones.edit', $phone->id) }}" method="POST" ">
                                @csrf
                                @method('GET')

                                <button class=" text-red-600 hover:underline">
                                    Edit
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection