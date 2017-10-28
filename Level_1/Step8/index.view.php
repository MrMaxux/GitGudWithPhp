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
      <h1><?= ucwords($task['title']); ?> </h1>
    </header>
    <div class="content">
      <ul>
        <li>
          <strong>Time to end: </strong><?= ucwords($task['due']); ?>
        </li>
        <li>
          <strong>Person: </strong><?= ucwords($task['assigned_to']); ?>
        </li>
        <li>
          <strong>Completed: </strong><?= $task['completed'] ? 'Complete' : 'Incomplete'; ?>
        </li>
      </ul>
    </div
  </body>
</html>
