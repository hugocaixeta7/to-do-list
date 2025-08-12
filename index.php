<?php
require_once 'models/task_model.php';
$tasks = Task::getAll();
?>

<!-- Header -->
<?php require('views/header.php') ?>

<!-- Body -->
<body>
    <div id="to_do">
      <?php 
      require('views/bodyTasks.php');
      ?>
    </div>
    <script src="src/javascript/script.js"></script>
</body>
</html>