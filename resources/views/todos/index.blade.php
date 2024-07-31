<!DOCTYPE html>
<html>
<head>
    <title>Todo List</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.1/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto">
        <h1 class="text-2xl mt-10 text-center font-bold mb-4"><i class="bi bi-receipt"></i> Todo List</h1>
        <div class="flex justify-center items-center mb-4">
            <a href="{{ route('todos.create') }}" class="bg-blue-500 text-white text-center px-4 py-2 rounded no-underline"><i class="bi bi-plus-circle"></i> Add Todo</a>
            @if (session('success'))
                <div class="bg-green-500 text-white p-2 my-4">
                    {{ session('success') }}
                </div>
            @endif
        </div>
        <div class="flex justify-center items-center mt-35">
            <table class="table-auto border-collapse border border-gray-400">
                <tbody>
                    @foreach ($todos as $todo)
                    <tr class="border border-gray-900">
                        <td class="px-4 py-2 text-xl text-black hover:text-gray-700"><a href="{{ route('todos.show', $todo->id) }}" class="no-underline">{{ $todo->title }}</a></td>
                        <td class="px-4 py-2">
                            <a href="{{ route('todos.edit', $todo->id) }}" class="bg-yellow-500 text-white px-2 py-1 rounded no-underline">Edit</a>
                            <form action="{{ route('todos.destroy', $todo->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded no-underline">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
