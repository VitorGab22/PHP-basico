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
 $frase = "Eu vou estudar PHP agora";
 $cont = str_word_count($frase,2); //contar palavras
 print_r($cont);
 //  echo $cont;
    ?>
    </div>
</body>
</html>