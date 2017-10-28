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

      <h1>
        <?php
        if($_GET['name' !== '' ]){
           $name = $_GET['name']
           echo 'Hello, '.$name;
        } else{
           echo "Hello, Stranger!";
        }
        ?>
        </h1>
    </header>
  </body>
</html>
