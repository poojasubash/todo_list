<!-- resources/views/todos/create.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Create Todo</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.1/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mx-auto mt-10">
        <h1 class="text-2xl font-bold mb-4 flex justify-center item-center">Create Todo</h1>
        <form action="{{ route('todos.store') }}" method="POST" style="margin-left: 32px">
            @csrf
            <div class="mb-4">
                <label for="title" class="mb-4 font-bold block text-gray-700">Title:</label>
                <input type="text" name="title" id="title" class="border border-gray-500 rounded w-1/2 py-2 px-3" required>
            </div>
            <div class="mb-4">
                <label for="description" class="mb-4 font-bold block text-gray-700">Description:</label>
                <textarea name="description" id="description" class="border border-gray-500 rounded w-1/2 py-2 px-3"></textarea>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Create</button>
            <a href="{{route('todos.index')}}" class="ml-2 bg-blue-500 text-white px-4 py-2 rounded no-underline">Back</a>
        </form>
    </div>
</body>
</html>
