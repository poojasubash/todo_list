<!-- resources/views/todos/edit.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Edit Todo</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.1/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>
<body>
    <div class="container mx-auto">
        <h1 class="text-2xl mt-10 text-center font-bold mb-4"><i class="bi bi-pencil-square"></i> Edit Todo</h1>
        <form action="{{ route('todos.update', $todo->id) }}" method="POST" style="margin-left: 12px;">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="title" class="mb-4 font-bold block text-gray-700">Title:</label>
                <input type="text" name="title" id="title" value="{{ $todo->title }}" class="border border-gray-500 rounded w-1/2 py-2 px-3">
            </div>
            <div class="mb-4">
                <label for="description" class=" mb-4 font-bold block text-gray-700">Description:</label>
                <textarea name="description" id="description" class="border border-gray-500 rounded w-1/2 py-6 px-3">{{ $todo->description }}</textarea>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
            <a href="{{route('todos.index')}}" class="ml-2 bg-blue-500 text-white px-4 py-2 rounded no-underline">Back</a>
        </form>
    </div>
</body>
</html>
