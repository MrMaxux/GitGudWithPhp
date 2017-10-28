<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Html and PHP</title>
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

      <h1> Arrays </h1>

    </header>
    <div class="content">

      <ul>
        <?php
          foreach ($names as $name) {
            echo "<li>$name</li>";
          }
        ?>
      </ul>

      <ul>
        <?php foreach ($names as $name) : ?>
            <li><?= $name ?></li>
        <?php endforeach; ?>
      </ul>

    </div
  </body>
</html>
