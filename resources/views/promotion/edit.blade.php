@extends('layout.main')

@section("isihalaman")
<h1 class="text-4xl font-bold text-center mb-8">Edit</h1>

<div class="bg-white p-6 rounded-lg shadow-md max-w-lg mx-auto mb-8">
    @if ($edit)
    <form action="{{ URL::to('/promotion/'.$edit->id) }}" method="POST">
        @csrf
        @method('PUT')        
        <div class="mb-4">
            <label class="block text-gray-700 font-semibold">Title:</label>
            <input type="text" id="newtitle" name="newtitle" value="{{ $edit->title }}" class="w-full border border-gray-300 p-2 rounded-md">
            @error('newtitle')
                <div class='text-red-600'>{{ $message }}</div>
            @enderror
        </div>
        
        <div class="mb-4">
            <label class="block text-gray-700 font-semibold">Description:</label>
            <textarea id="newdescription" name="newdescription" class="w-full border border-gray-300 p-2 rounded-md min-h-[200px]">{{ $edit->description }}</textarea>
            @error('newdescription')
                <div class='text-red-600'>{{ $message }}</div>
            @enderror
        </div>
        
        <div class="mb-4">
            <label class="block text-gray-700 font-semibold">Image URL:</label>
            <input type="text" id="newimage" name="newimage" value="{{ $edit->image }}" class="w-full border border-gray-300 p-2 rounded-md">
            @error('newimage')
                <div class='text-red-600'>{{ $message }}</div>
            @enderror
        </div>

        <div class="flex space-x-4 mt-4">
            <a href="{{ URL::to('/promotion/'.$edit->id) }}" 
                class="bg-gray-500 text-white px-4 py-2 rounded-md hover:bg-gray-600 transition w-full text-center">
                Cancel
            </a>

            <button type="submit" 
                class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition w-full">
                Update
            </button>
        </div>
    </form>

    <form action="{{ URL::to('/promotion/'.$edit->id) }}" method="POST" class="mt-4">
        @csrf
        @method('DELETE')
        <button type="submit" 
            onclick="return confirm('Are you sure you want to delete this promotion?');"
            class="bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-700 transition w-full">
            Delete
        </button>
    </form>
    
    @else
    <p class="text-gray-500 text-center">Invalid Promotion ID</p>
    @endif
</div>
@endsection