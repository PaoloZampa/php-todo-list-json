<?php
$todoThings = "./task.json";
$todoThingsString = file_get_contents($todoThings);
echo $todoThingsString;