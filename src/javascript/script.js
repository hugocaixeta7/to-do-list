$(document).ready(function () {
  $('.edit-button').click(function () {
    const $task = $(this).closest('.task');

    $task.find('.progress').addClass('hidden');
    $task.find('.task-description').addClass('hidden');
    $task.find('.task-actions').addClass('hidden');
    $task.find('.edit-task').removeClass('hidden');
  });
  $('.progress').click(function () {
        if ($(this).is(':checked')) {
           $(this).addClass('done');
        } else {
            $(this).removeClass('done');
        }
  });

});