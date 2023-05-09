<?php
$todoThings = "./task.json";
$newTasks = json_encode($_POST);
file_put_contents($todoThings, $newTasks);
echo $newTasks;