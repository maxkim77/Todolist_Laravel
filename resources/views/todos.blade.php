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

    <!-- Todo List -->
    <div class="container mx-auto p-4">
    <div class="bg-white p-4 rounded-md shadow-md mb-4">
    <h1 class="text-2xl font-bold">☑︎ To-do List</h1>
</div>
        <form action="/todos" method="POST" class="mb-4">
            @csrf
            <input type="text" name="text" placeholder="새 할일 입력" class="border border-gray-300 px-4 py-2 rounded-md mr-2">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">추가</button>
        </form>
        <ul>
            @foreach ($todos as $todo)
                <li class="flex flex-col md:flex-row md:items-center justify-between bg-white border border-gray-300 rounded-md p-4 mb-2">
                    <div class="w-full md:w-3/4">
                        <span>{{ $todo->text }}</span>
                    </div>
                    <div class="flex flex-wrap md:flex-nowrap items-center justify-end mt-2 md:mt-0 w-full md:w-1/4">
                        <span class="{{ $todo->completed ? 'text-green-500' : 'text-red-500' }}">{{ $todo->completed ? 'Completed' : 'Not Completed' }}</span>
                        <!-- 수정 버튼 -->
                        <a href="/todos/{{ $todo->id }}/edit" class="text-blue-500 ml-2 md:ml-4">수정</a>
                        <!-- 삭제 버튼 -->
                        <form action="/todos/{{ $todo->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 ml-2 md:ml-4">삭제</button>
                        </form>
                        <!-- 완료 / 미완료 버튼 -->
                        <form action="/todos/{{ $todo->id }}/complete" method="POST">
                            @csrf
                            @if(!$todo->completed)
                                <button type="submit" class="text-blue-500 ml-2 md:ml-4">완료로 표시</button>
                            @else
                                <button type="submit" class="text-red-500 ml-2 md:ml-4">미완료로 표시</button>
                            @endif
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>
