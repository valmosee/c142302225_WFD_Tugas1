@extends('layout.main')

@section("isihalaman")
<div class="container mx-auto p-4">
    <div class="max-w-3xl mx-auto bg-white shadow-lg rounded-lg overflow-hidden p-6">
        
        <div class="mb-4">
            <img src="{{ $detail->image }}" 
                class="w-full h-auto object-cover transition-transform duration-300 ease-in-out hover:scale-105">
        </div>

        <div class="p-6 text-wrap">
            <h1 class="text-3xl font-bold mb-4">{{ $detail->title }}</h1>
            <p class="text-gray-600 mb-4 indent-8 text-justify">{{ $detail->description }}</p>

            <div class="flex justify-between">
                <a href="/promotion" class="bg-gray-500 text-white px-4 py-2 rounded-md hover:bg-gray-600 transition">
                    Back to Home
                </a>

                <a href="{{ URL::to('/promotion/'.$detail->id.'/edit') }}" class="bg-yellow-500 text-white px-4 py-2 rounded-md hover:bg-yellow-600 transition">
                    Edit
                </a>
            </div>        
        </div>
    </div>
</div>
@endsection
