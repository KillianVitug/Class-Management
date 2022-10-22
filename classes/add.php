<?php

include "init.php";

$task = new classes('Clean the house');
$task->setConnection($connection);
$task->save();