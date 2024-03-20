<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    <!-- CSS 파일 링크 -->
    <link href="styles.css" rel="stylesheet">
    @vite('resources/js/app.js', 'resources/css/app.css')
</head>

<body class="bg-gray-100">
    <!-- Navigation Include -->
    @include('layouts.navigation')
    <div class="container mx-auto p-4">
    <div class="bg-white p-4 rounded-md shadow-md mb-4">

    <h1 class="text-2xl font-bold">☑︎ To-do List Edit</h1>
    </div>
    <form action="/todos/{{ $todo->id }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="text" value="{{ $todo->text }}" placeholder="할 일" class="border border-gray-300 px-4 py-2 rounded-md mb-2">
        <label for="completed" class="inline-flex items-center">
            <input type="checkbox" id="completed" name="completed" {{ $todo->completed ? 'checked' : '' }} class="form-checkbox h-5 w-5 text-blue-600">
            <span class="ml-2 text-gray-700">완료됨</span>
        </label>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">저장</button>
    </form>
</div>
</body>
</html>
