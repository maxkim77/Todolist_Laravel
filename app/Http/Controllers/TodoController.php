<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function __construct()
{
    $this->middleware('auth');
}

    public function index()
    {
        // $todos = Todo::all(); 
        // 모든 할 일 조회
        $todos = auth()->user()->todos; // 로그인한 사용자의 Todo만 조회
        return view('todos', compact('todos')); // `todos` 뷰로 데이터 전달
    }

    public function store(Request $request)
{
    $request->user()->todos()->create([
        'text' => $request->text,
        'completed' => false,
    ]);

    return redirect('/todos');
}


    public function edit($id)
    {
        $todo = Todo::findOrFail($id); // 수정할 할 일 찾기
        return view('edit', compact('todo')); // 수정 폼으로 이동
    }

    public function update(Request $request, $id)
    {
        $todo = Todo::findOrFail($id); // 업데이트할 할 일 찾기
        $todo->update([
            'text' => $request->text,
            'completed' => $request->has('completed'), // 'completed' 체크박스의 상태에 따라 결정
        ]);

        return redirect('/todos'); // 업데이트 후 목록 페이지로 리다이렉트
    }

    public function destroy($id)
    {
        Todo::findOrFail($id)->delete(); // 주어진 ID의 할 일 삭제
        return redirect('/todos'); // 삭제 후 목록 페이지로 리다이렉트
    }

    public function complete(Request $request, $id)
    {
        $todo = Todo::findOrFail($id); // 상태를 변경할 할 일 찾기
        $todo->completed = !$todo->completed; // 완료 상태 반전
        $todo->save(); // 변경사항 저장

        return back(); // 이전 페이지로 돌아가기
    }
}
