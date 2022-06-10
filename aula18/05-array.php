<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
  <div>
    <pre> 
    <!-- visualização diferente -->
    <?php
      $v = array("nome" => "Joyce",
                "idade" => 17,
                "peso" => 60,
                );
      foreach($v as $k => $c) {
        echo "O campo $k possui o conteudo $c <br/>";
      }  
    ?>
    </pre>
    </div>
</body>
</html>