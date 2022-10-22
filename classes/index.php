<?php

include "init.php";

$task = new classes('');
$task->setConnection($connection);
$todos = $task->getAll();

foreach ($class as $item) {
	echo $item['id'] . ' name' . $item['description'] . 'class_code';
}


?>