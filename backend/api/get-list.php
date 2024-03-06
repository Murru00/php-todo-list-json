<?php

//FILE JSON PER LEGGERE L ARRAY
$json_list_content = file_get_contents('../data/todolist.json');


//PERCORSO CHE RICEVE JSON
header('Content-Type: application/json');


//STAMPA ARRAY
echo $json_list_content;