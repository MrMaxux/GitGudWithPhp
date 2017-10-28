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
      <h1> Associative Arrays </h1>
    </header>
    <div class="content">
      <ul>
        <?php foreach ($person as $feature => $value ) :?>
            <li><strong><?= $feature;  ?></strong> <?= $value; ?></li>
        <?php endforeach; ?>
      </ul>
    </div
  </body>
</html>
