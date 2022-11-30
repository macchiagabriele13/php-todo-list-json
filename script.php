<?php

$tasks_string = file_get_contents('tasks.json');
/* var_dump($tasks_string); */
$task_array = json_decode($tasks_string);
/* var_dump($task_array); */


header('Content-Type: application/json');
echo json_encode($task_array);


var_dump($_POST('newTask'));
