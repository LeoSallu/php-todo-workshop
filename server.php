<?php

// Recupero il contenuto dal file todo-list.json assegnandolo ad una variabile

$database = file_get_contents(__DIR__.'/todo-list.json');


// Conversione della stringa in array associativo (Impostando il valore delle chiavi)

$todo_list = json_decode($database, true);

//Elaborazione dati 







// Restituzione dati file JSON

header('Content-Type: application/json');
$result = json_encode($todo_list);
echo $result;