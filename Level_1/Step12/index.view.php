<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Boolean</title>
    <style media="screen">
      header{
        background: #e3e3e3;
        padding: 2em;
        text-align: center;
      }
    </style>
  </head>
  <body>
    <header>
    </header>
    <div class="content">
      <ul>
     <?php foreach ($tasks as $task): ?>
      <li>
        <?php if ($task->completed) : ?>
          <strike><?= $task->description; ?></strike>
        <?php else: ?>
          <?= $task->description; ?>
        <?php endif; ?>
      </li>
    <?php endforeach; ?>
    </div
  </body>
</html>
