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
      <h1><?= $SimpleGuy['name']; ?> </h1>
    </header>
    <div class="content">

          <strong>Is he allowed to go to the nightclub? </strong>
          <?php if($restricted == true ){
            echo 'You shall not pass!';
          } else{
            echo 'You can come in.';
          }?>

    </div
  </body>
</html>
