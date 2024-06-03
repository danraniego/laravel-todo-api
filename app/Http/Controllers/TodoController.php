<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TodoController extends Controller
{

    /**
     * delete
     * 
     * Delete Todo
     * 
     * @param int $id
     * @return Response
     */
    public function delete(int $id)
    {
        $todo = Todo::find($id);
        $todo->delete();

        return response([
            "message" => "Todo Successfully Deleted!"
        ], 200);
    }

    /**
     * updateTitle
     * 
     * Update todo Title
     * 
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function updateTitle(Request $request, int $id)
    {
        $todo = Todo::find($id); // Find the todo

        $todo->title = $request->title; // Set the new value
        $todo->save(); // Save

        return response($todo, 200);
    }


    /**
     * getTodos
     * 
     * Get Todos From Database
     * 
     * @return Response
     */
    public function getTodos() 
    {
        $todos = Todo::get();

        return response($todos, 200);
    }

    /**
     * addTodo
     * 
     * A Function that creates todo
     * 
     * 
     * @param Request $request
     * @return Response
     */
    public function addTodo(Request $request) 
    {

        $todoItem = [
            'title' => $request->title
        ];

        Todo::create($todoItem);

        return response([
            "message" => 'Todo Item Succesfully Created!'
        ], 200);
    }
}
