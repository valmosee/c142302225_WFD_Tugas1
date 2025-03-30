@extends('layout.main')

@section("isihalaman")
<h1 class="text-4xl font-bold text-center mb-8">Restaurant Recomendation</h1>

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach($data as $row)
    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <img src="{{ $row->image }}" class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="text-xl font-semibold mb-2">{{ $row->title }}</h3>
                <p class="text-gray-600 mb-4 line-clamp-3">{{ $row->description }}</p>
                <a href="{{ URL::to('/promotion/'.$row->id) }}"
                    class="block text-center bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition">
                    Show Detail
                </a>
            </div>
        </div>
    @endforeach
</div>
@endsection
