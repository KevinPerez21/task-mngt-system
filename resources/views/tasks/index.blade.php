@extends('layouts.app')

@section('title', 'Tasks List')

@section('content')
<div class="container mx-auto p-4">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-blue-700">Tasks List</h1>
        <a href="{{ route('tasks.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Add</a>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full border border-blue-200 bg-white shadow rounded">
            <thead class="bg-blue-100 text-blue-800">
                <tr>
                    <th class="py-2 px-4 border-b border-blue-200 text-left">Title</th>
                    <th class="py-2 px-4 border-b border-blue-200 text-left">Description</th>
                    <th class="py-2 px-4 border-b border-blue-200 text-left">Long Description</th>
                    <th class="py-2 px-4 border-b border-blue-200 text-left">Option</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                <tr class="hover:bg-blue-50">
                    <td class="py-2 px-4 border-b border-blue-100">{{ $task->title }}</td>
                    <td class="py-2 px-4 border-b border-blue-100">{{ $task->description }}</td>
                    <td class="py-2 px-4 border-b border-blue-100">{{ $task->long_description }}</td>
                    <td class="py-2 px-4 border-b border-blue-100 space-x-2">
                        <a href="{{ route('tasks.edit', $task->id) }}" class="text-blue-600 hover:underline">Edit</a>
                        <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
