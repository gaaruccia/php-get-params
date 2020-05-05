<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Nome</title>
    <!--passare come argomenti in GET nome e cognome; e salutare l'interlocutore-->
    <?php
    $name = $_GET["name"];
    $subName = $_GET["subName"];
     ?>
  </head>
  <body>
    <h1> Ciao <?php echo $name; echo $subName; ?>!!</h1>
  </body>
</html>
