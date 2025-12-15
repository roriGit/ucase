@extends('layouts.app-admin')

@section('content')
    <div class="max-w-4xl mx-auto bg-white p-6 rounded shadow">

        <h2 class="text-xl font-semibold mb-4">Edit Phone</h2>

        {{-- Validation Errors --}}
        @if ($errors->any())
            <div class="mb-4 text-red-600">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('phones.update', $phone->id) }}" method="POST" enctype="multipart/form-data"
            class="space-y-6">

            @csrf
            @method('PUT')

            {{-- Model / Unit / Qty --}}
            <div class="grid grid-cols-3 gap-4">
                <input type="text" name="model" value="{{ old('model', $phone->model) }}" class="border p-2 rounded"
                    required>

                <input type="text" name="unit" value="{{ old('unit', $phone->unit) }}" class="border p-2 rounded" required>

                <input type="number" name="qty" value="{{ old('qty', $phone->qty) }}" class="border p-2 rounded" min="0"
                    required>
            </div>

            {{-- Image Upload --}}
            <div>
                <label class=" font-medium mb-2">Phone Image</label>

                <div id="dropzone"
                    class="relative border-2 border-dashed rounded-lg p-6 text-center cursor-pointer hover:border-blue-500">
                    <input type="file" name="image" id="imageInput" accept="image/*"
                        class="absolute inset-0 w-full h-full opacity-0 cursor-pointer">

                    <p class="text-gray-500">Drag & drop or click to replace image</p>
                </div>

                {{-- Preview --}}
                <div class="mt-4">
                    <img id="imagePreview" src="{{ $phone->image ? asset($phone->image) : '' }}"
                        class="{{ $phone->image ? '' : 'hidden' }} w-48 h-48 object-contain border rounded">
                </div>

                {{-- Remove Image --}}
                {{-- @if ($phone->image)
                <label class="mt-3 inline-flex items-center">
                    <input type="checkbox" name="remove_image" class="mr-2">
                    Remove current image
                </label>
                @endif --}}
            </div>

            {{-- Actions --}}
            <div class="flex justify-between">
                <a href="{{ route('phones.index') }}" class="px-4 py-2 bg-gray-300 rounded hover:bg-gray-400">
                    Cancel
                </a>

                <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                    Update Phone
                </button>
            </div>
        </form>
    </div>

    {{-- Image Preview Script --}}
    <script>
        const input = document.getElementById('imageInput');
        const preview = document.getElementById('imagePreview');

        input.addEventListener('change', function () {
            const file = this.files[0];
            if (!file) return;

            const reader = new FileReader();
            reader.onload = e => {
                preview.src = e.target.result;
                preview.classList.remove('hidden');
            };
            reader.readAsDataURL(file);
        });
    </script>
@endsection