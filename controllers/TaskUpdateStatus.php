<?php
require_once '../models/Task_Model.php';

$id = $_POST['id_task'] ?? null;
$completed = $_POST['new_status'] ?? null;

if ($id !== null && $completed !== null) {
    TaskModel::updateStatus($id, $completed);
    header('Location: ../index.php');
    exit;
} else {
    header('Location: ../index.php');
    exit;
}


