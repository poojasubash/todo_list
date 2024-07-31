<!-- resources/views/todos/show.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Todo Details</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.1/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mx-auto">
        <h1 class="text-2xl text-center font-bold mb-4 flex justify-center item-center mt-10">Todo Details</h1>


        <div class="mb-4 ml-8">
            <label for="title" class="mb-4 text-xl font-bold block text-black-700">Title : {{ $todo->title }}</label>
        </div>
         <div class="mb-8 ml-8">
            <label for="description" class="mb-4 text-xl font-bold block text-black-700">Description : {{$todo->description}}</label>
        </div>
        <a href="{{ route('todos.index') }}" class="ml-8 bg-gray-500 text-white px-4 py-2 rounded">Back</a>
    </div>
</body>
</html>
