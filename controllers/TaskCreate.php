    <?php
    require_once '../models/Task_Model.php';

    if (!empty($_POST)) {
        $description = filter_input(INPUT_POST, 'description');
        if ($description) {
            TaskModel::create($description);
            header('Location: ../index.php');
            exit;
        } else {
            header('Location: ../index.php'); 
            exit;
        }
    }
