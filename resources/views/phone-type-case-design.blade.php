@extends('layouts.app')
@section('content')

    <header class="header" style="background-color: var(--case-yellow);">
        <div class="container-1440 center">
            <div class="heading-container">
                <div style="-webkit-transform:translate3d(0, 2EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-5DEG) skew(0, 0);-moz-transform:translate3d(0, 2EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-5DEG) skew(0, 0);-ms-transform:translate3d(0, 2EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-5DEG) skew(0, 0);transform:translate3d(0, 2EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-5DEG) skew(0, 0);opacity:0"
                    class="heading-row-1">
                    <h1><span class="underline-wavey brand-color-2">Loveable</span></h1>
                </div>
                <div style="-webkit-transform:translate3d(0, 2EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(6DEG) skew(0, 0);-moz-transform:translate3d(0, 2EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(6DEG) skew(0, 0);-ms-transform:translate3d(0, 2EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(6DEG) skew(0, 0);transform:translate3d(0, 2EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(6DEG) skew(0, 0);opacity:0"
                    class="heading-row-2">
                    <h1>{{ $phone_type }} case</h1>
                </div>
            </div>
        </div>
    </header>
    <section class="order-section">
        <div id="w-node-c5a61550-ce24-d36a-df16-785771eb572d-39f69b08" class="w-layout-layout quick-stack wf-layout-layout">
            <div class="w-layout-cell">
                <div class="">
                    <h3 class="text-lg font-semibold mb-2 text-gray-800">
                        Photo Library
                    </h3>

                    <div class="grid grid-cols-3 gap-3">
                        <!-- Image 1 -->
                        <img src="{{ asset('images/gallery1.png') }}" alt="" class="h-64 object-contain" />
                        <img src="{{ asset('images/gallery2.png') }}" alt="" class="h-64 object-contain" />
                        <img src="{{ asset('images/gallery3.png') }}" alt="" class="h-64 object-contain" />
                        <img src="{{ asset('images/gallery4.png') }}" alt="" class="h-64 object-contain" />
                        <img src="{{ asset('images/gallery5.png') }}" alt="" class="h-64 object-contain" />
                        <img src="{{ asset('images/gallery6.png') }}" alt="" class="h-64 object-contain" />

                    </div>
                </div>

            </div>
            <div class="w-layout-cell cell">
                <div class="details-div">
                    <div class="w-form">
                        <form action="{{ route('phones.store_case_design') }}" method="POST" enctype="multipart/form-data"
                            class="mb-6 bg-white p-6 rounded shadow">
                            <label for="name">Upload your favourite image or <button class="underline">click here</button>
                                to
                                select
                                an image from our library.</label>
                            <!-- Success message -->
                            @if(session('success'))
                                <div class="bg-green-100 text-green-800 p-3 rounded mb-4">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <!-- Add Phone Form -->

                            @csrf

                            <!-- Drag & Drop Image Upload -->
                            <div class="mt-4 border-2 border-dashed rounded-lg p-6 text-center cursor-pointer
                                                                                                                                                                                                                                                                                                                                                                           hover:border-blue-500 transition relative"
                                onclick="document.getElementById('image').click()" ondragover="event.preventDefault()"
                                ondrop="handleDrop(event)">
                                <img id="preview" class="hidden mx-auto mb-3 max-h-32 object-contain" />

                                <p id="upload-text" class="text-gray-600">
                                    Drag & drop image here or <span class="text-blue-600 font-semibold">click to
                                        upload</span>
                                </p>

                                <p id="file-name" class="text-sm text-gray-500 mt-2"></p>
                            </div>

                            <input type="file" name="case_image" id="image" accept="image/*" class="hidden"
                                onchange="previewImage(this)">


                            <div class="grid mb-4 mt-4">
                                <label class="min-w-full" for="name">{{ $phone_type }} type</label>
                                <select id="Phone-case-types" name="phone_id" data-name="Phone case types" required=""
                                    class="select-field-2 w-select min-w-full">
                                    <option value="">Phone case type...</option>
                                    @foreach ($phones as $phone)
                                        @if ($phone->qty > 0)
                                            <option value="{{ $phone->id }}" attr-slug="">{{ $phone->model }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="grid grid-cols-1 gap-4 mb-4">
                                <input type="text" name="firstname" placeholder="First Name" class="border p-2 rounded"
                                    required>

                                <input type="text" name="lastname" placeholder="Last Name" class="border p-2 rounded"
                                    required>

                                <input type="email" name="email" placeholder="Email Address" class="border p-2 rounded"
                                    required>

                                <input type="tel" name="contact" placeholder="Contact Number" class="border p-2 rounded"
                                    required>

                                <input type="text" name="delivery_address" placeholder="Delivery Address"
                                    class="border p-2 rounded" required>
                            </div>
                            <label for="email">Price: R250.00</label>
                            <button type="submit" class="mt-6 bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                                Create Case Design
                            </button>
                        </form>
                        {{-- <a href="#" class="button w-button">Next step</a> --}}
                        </form>
                        <div class="w-form-done success">

                        </div>
                        <div class="w-form-fail failure">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
<script>
    document.body.className = '';



</script>