<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Email</title>
    <!--passare come argomento in GET una mail e stampare un div che contenga OK se contiene un punto e una chiocciola; KO altrimenti-->
    <?php
    $email = $_GET["email"];

    $mailDotIndex = strpos($email, ".");
    $mailDotAt = strpos($email, "@");
    ?>
  </head>
  <body>
    <div>
      <?php
      if ($mailDotIndex && $mailDotAt) {
        echo "Ok";
      }else {
        echo "Ko";
      }
      ?>
    </div>
  </body>
</html>
