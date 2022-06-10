<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
  <div>
      <?php
     $tab=isset($_GET["num"])?$_GET["num"]:0;
     $c=1;
     do{
       echo "$tab x $c = ".($tab*$c)."</br>";
       $c++;
     }while ($c<=10);
      ?>
      <a href="03-tabuada00.php">Voltar</a>
    </div>
</body>
</html>