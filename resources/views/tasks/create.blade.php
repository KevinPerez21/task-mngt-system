@extends('layouts.app')

@section('title', 'Tasks Create')

@section('content')
    <div class="w-full max-w-xl bg-white p-8 rounded shadow-md">
        <h1 class="text-2xl font-bold text-blue-700 mb-6">Create a New Task</h1>
        <form action="{{ route('tasks.store') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label for="title" class="block text-blue-700 font-medium">Title</label>
                <input type="text" name="title" id="title" class="w-full border border-blue-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            @error('title')
                <span class="text-red-600 text-sm mt-1 block">{{ $message }}</span>
            @enderror

            <div>
                <label for="description" class="block text-blue-700 font-medium">Description</label>
                <textarea name="description" id="description" rows="3" class="w-full border border-blue-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required></textarea>
            </div>

            @error('description')
                <span class="text-red-600 text-sm mt-1 block">{{ $message }}</span>
            @enderror

            <div>
                <label for="long_description" class="block text-blue-700 font-medium">Long Description</label>
                <textarea name="long_description" id="long_description" rows="4" class="w-full border border-blue-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required></textarea>
            </div>

            @error('long_description')
                <span class="text-red-600 text-sm mt-1 block">{{ $message }}</span>
            @enderror

            <div class="flex justify-end">
                <input type="submit" name="save" value="Save" class="bg-blue-600 text-white px-5 py-2 rounded hover:bg-blue-700 transition">
            </div>
        </form>
    </div>
@endsection
