<?php
require_once __DIR__ . '/../models/Task_Model.php';
$tasks = TaskModel::getAll();
?>

<!-- Cabeçalho -->
<h1>Daily Missions</h1>
<form action="controllers/TaskCreate.php" method="POST" class="to-do-form">
  <input type="text" name="description" placeholder="Enter your mission here" required>
  <button type="submit" class="form-button" title="Add task">
    <i class="fa-solid fa-plus"></i>
  </button>
</form>

<!-- Listagem de tarefas -->
<div id="tasks">
  <?php foreach ($tasks as $task): ?>
    <div class="task">

      <!-- Formulário para atualizar status -->
      <form method="POST" action="controllers/TaskUpdateStatus.php" class="status-form" >
        <input type="hidden" name="id_task" value="<?= $task['id'] ?>">
        <input type="hidden" name="new_status" value="<?= $task['completed'] ? 0 : 1 ?>">

        <input type="checkbox" 
               name="progress"
               class="progress <?= $task['completed'] ? 'done' : '' ?> "<?= $task['completed'] ? 'checked' : '' ?>
               onchange="this.form.submit();">
      </form>

      <!-- Texto da tarefa com classe condicional -->
      <p class="task-description <?= $task['completed'] ? 'done' : '' ?>">
        <?= $task['description'] ?>
      </p>

      <!-- Ações da tarefa -->
      <div class="task-actions">
        <a class="action-button edit-button" title="Edit task">
          <i class="fa-solid fa-pen-to-square"></i>
        </a>
        
        <a href="./controllers/TaskDelete.php?id=<?= $task['id'] ?>" class="action-button delete-button" title="Delete task">
          <i class="fa-solid fa-trash-can"></i>
        </a>
      </div>
      
      <!-- Formulário de edição da tarefa -->
      <form action="./controllers/TaskUpdate.php" method="POST" class="to-do-form edit-task hidden">
        <input type="text" class="hidden" name="id_task" value="<?= $task['id'] ?>">
        <input type="text" name="description" placeholder="Edit your task here" value="<?= $task['description'] ?>" />
        <button type="submit" class="form-button confirm-button">
          <i class="fa-solid fa-check"></i>
        </button>
      </form>

    </div>
  <?php endforeach ?>
</div>
