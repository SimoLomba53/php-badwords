
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <h1>
        <?php $_GET ["phrases"] ;
         echo $lorem_replace=str_replace("Jack","***",$_GET["phrases"]);
         ?>
    </h1>
    <p>
        <?php echo $lorem_length=strlen($_GET["phrases"])?>
    </p>
  </body>
</html>