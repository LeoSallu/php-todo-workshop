<?php

//--- Aggiunta Todo ---\\

function addTodo($todo_list, $params)
{
    $todo = [
        'text' => $params['todo'],
        'done' => false
    ];
    $todo_list[] = $todo;

    //Salvare todo nel file

    file_put_contents(__DIR__ . '/todo-list.json', json_encode($todo_list));
    return $todo_list;
}
//--- Cancellare todo ---\\

function deleteTodo($todo_list, $index)
{
    unset($todo_list[$index]);
    file_put_contents(__DIR__ . '/todo-list.json', json_encode($todo_list));
    return $todo_list;
}

//--- Modificare todo ---\\

function editTodo($todo_list, $params)
{
    $index = $params['edit'];
    $todo_list[$index] = array(
        'text' => $params['text'],
        'done' => false 
    );

    file_put_contents(__DIR__ . '/todo-list.json', json_encode($todo_list));
    return $todo_list;
}

