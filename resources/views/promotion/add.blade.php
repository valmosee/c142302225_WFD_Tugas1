@extends('layout.main')

@section("isihalaman")
<h1 class="text-4xl font-bold text-center mb-8">Add Restaurant</h1>

<div class="max-w-2xl mx-auto bg-white p-6 shadow-lg rounded-lg">
    <form action="{{ URL::to('/promotion') }}" method="post">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2">Title</label>
            <input id="title" type="text" name="title" class="w-full p-2 border border-gray-300 rounded-lg">
            @error('title')
                <div class='text-red-600 italic'>{{ $message }}</div>
            @enderror
        </div>
        
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2">Description</label>
            <textarea id="description" name="description" class="w-full p-2 border border-gray-300 rounded-lg"></textarea>
            @error('description')
                <div class='text-red-600 italic'>{{ $message }}</div>
            @enderror
        </div>
        
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2">Image URL</label>
            <input id="image" type="text" name="image" class="w-full p-2 border border-gray-300 rounded-lg">
            @error('image')
                <div class='text-red-600 italic'>{{ $message }}</div>
            @enderror
        </div>
        
        <div class="text-center">
            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700">Add</button>
        </div>
    </form>
</div>
@endsection