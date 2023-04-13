<?php
require_once (__DIR__.'/functions.php');
// Recupero il contenuto dal file todo-list.json assegnandolo ad una variabile \\

$database = file_get_contents(__DIR__.'/todo-list.json');


// Conversione della stringa in array associativo (Impostando il valore delle chiavi) \\

$todo_list = json_decode($database, true);

//------Elaborazione dati------\\

//---Gestione Nuovi Todo---\\ 
if(isset($_POST['add'])){
    $todo_list = addTodo($todo_list, $_POST);
}
//Gestione Cancellazione Todo 
if(isset($_POST['delete'])){
    $todo_list = deleteTodo($todo_list, $_POST['delete']);

}
//Gestione Modifica Todo 
if(isset($_POST['edit'])){
    $todo_list = editTodo($todo_list, $_POST);
}

// Restituzione dati file JSON \\

header('Content-Type: application/json');
$result = json_encode($todo_list);
echo $result;