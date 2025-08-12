<?php
require_once '../models/Task_Model.php';

$id_task = filter_input(INPUT_GET, 'id');

if ($id_task) {
    TaskModel::delete($id_task);
}

header('Location: ../index.php');
exit;