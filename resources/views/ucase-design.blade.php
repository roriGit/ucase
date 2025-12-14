@extends('layouts.app')
@section('content')
    <div class="max-w-full mx-auto mt-10 p-6 bg-white rounded shadow">
        <h2 class="text-2xl font-bold mb-4">Available Phone List</h2>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div id="available-phone-cases">
                <div class="grid grid-cols-6 gap-4 space-x-4 pb-10">
                    @foreach($phones as $phone)
                        <label for="apple"
                            class="w-full h-50 cursor-pointer flex flex-center bg-no-repeat bg-center bg-contain                                                                                      "
                            style="background-image: url('{{ asset('images/2Case-collage-2-pics-p-500.png') }}');">
                            <input type="checkbox" id="apple" class="hidden peer" />
                            <p class="mt-50 mb-10 text-center w-full">{{ $phone->model }}</p>
                        </label>
                    @endforeach
                </div>

            </div>
    </div>
@endsection