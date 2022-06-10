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
 $t = "Aqui temos um texto enorme que Vai mostrar o funcionamento do Wordwrap";
 $r = wordwrap($t, 5, "<br/>\n",false); //quebra de linhas
 echo $r;
    ?>
    </div>
</body>
</html>