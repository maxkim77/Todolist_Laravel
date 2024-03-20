<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
</head>
<body>
    <h1>Todo List</h1>
    <form action="/todos" method="POST">
        @csrf
        <input type="text" name="text" placeholder="새 할일 입력">
        <button type="submit">추가</button>
    </form>
    <ul>
        @foreach ($todos as $todo)
            <li>
                {{ $todo->text }}
                @if($todo->completed)
                    - Completed
                @else
                    - Not Completed
                @endif
                <!-- 수정 버튼 -->
                <a href="/todos/{{ $todo->id }}/edit" style="display: inline;">수정</a>
                <!-- 삭제 버튼 -->
                <form action="/todos/{{ $todo->id }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">삭제</button>
                </form>
                <!-- 완료 / 미완료 버튼 -->
                <form action="/todos/{{ $todo->id }}/complete" method="POST" style="display: inline;">
                    @csrf
                    @if(!$todo->completed)
                        <button type="submit">완료로 표시</button>
                    @else
                        <button type="submit">미완료로 표시</button>
                    @endif
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
