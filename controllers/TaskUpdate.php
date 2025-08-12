<?php
require_once '../models/Task_Model.php';

$id_task = filter_input(INPUT_POST, 'id_task');
$description = filter_input(INPUT_POST, 'description');

if ($id_task && $description) {
    TaskModel::update($id_task, $description);
    header('Location: ../index.php');
    exit;
}
