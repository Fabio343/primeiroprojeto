<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Saudação</title>
  </head>
  <body>
    @for ($i=0; $i < 10; $i++)
      <h3>Olá {{$i}}</h3><!-- realiza a vizualização da variavel {}-->
    @endfor <!--uso do blade apenas usamos @ para casos de laços e decissões traduzindo para php-->
  </body>
</html>
