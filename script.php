
<?php

$tasks_string = file_get_contents('tasks.json');
/* var_dump($tasks_string); */
$task_array = json_decode($tasks_string);
/* var_dump($task_array); */

if (isset($_POST['newTask'])) {

    $singleTask = $_POST['newTask'];
    array_push($task_array, $singleTask);
    $json_new = json_encode($task_array);
    file_put_contents('tasks.json', $json_new);
}

header('Content-Type: application/json');
echo json_encode($task_array);
