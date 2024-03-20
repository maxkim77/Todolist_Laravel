<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>할 일 수정</title>
</head>
<body>
    <h1>할 일 수정</h1>
    <form action="/todos/{{ $todo->id }}" method="POST">
        @csrf
        @method('PUT') <!-- 여기를 'PUT'으로 변경 -->
        <input type="text" name="text" value="{{ $todo->text }}" placeholder="할 일">
        <input type="checkbox" name="completed" {{ $todo->completed ? 'checked' : '' }}> 완료됨
        <button type="submit">저장</button>
    </form>
</body>
</html>
