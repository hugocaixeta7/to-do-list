<?php
require_once __DIR__ . '/database/conn.php';

class Task {
    public static function getAll() {
        global $conn;
        $sql = $conn->query("SELECT * FROM task");

        if ($sql->rowCount() > 0) {
            return $sql->fetchAll(PDO::FETCH_ASSOC);
        }
        return [];
    }
}

class TaskModel {
    public static function getAll() {
        global $conn;
        $stmt = $conn->query("SELECT * FROM task WHERE id");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    //Create
    public static function create($description) {
        global $conn;
        $stmt = $conn->prepare("INSERT INTO task (description) VALUES (:description)");
        $stmt->bindValue(':description', $description);
        return $stmt->execute();
    }

    //Delete
    public static function delete($id_task) {
        global $conn;
        $stmt = $conn->prepare("DELETE FROM task WHERE id = (:id_task)");
        $stmt->bindValue(':id_task', $id_task);
        return $stmt->execute();
    }

    //Update
    public static function update($id_task, $newDescription) {
    global $conn;

    $stmt = $conn->prepare("UPDATE task SET description = :description WHERE id = :id_task");
    $stmt->bindValue(':description', $newDescription);
    $stmt->bindValue(':id_task', $id_task);

    return $stmt->execute();
}

    //update status
    public static function updateStatus($id, $completed) {
    global $conn;
    $stmt = $conn->prepare("UPDATE task SET completed = :completed WHERE id = :id");
    $stmt->bindValue(':completed', $completed);
    $stmt->bindValue(':id', $id);
    return $stmt->execute();
}

}

  

