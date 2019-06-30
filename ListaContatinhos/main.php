<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Agenda de Contatos</title>
    <link rel="stylesheet" href="css/stilos.css">

  </head>
  <body>

    <header>
      <h1>Agendinha</h1>
    </header>

    <div class="main">
      <form class="cadastro" action="cadastro.php" method="post">
        <div>
          <input class="insere" type="text" name="nome" placeholder="Escreva o seu nominho">
        </div>

        <div>
          <input class="insere" type="text" name="apelido" placeholder="Escreva o seu apelidinho">
        </div>

        <div>
          <input class="insere" type="text" name="telefone" placeholder="Telefoninho">
        </div>

        <div>
          <input class="insere" type="email" name="email" placeholder="Vou te enviar vários spans">
        </div>

        <div>
          <button type="submit" name="button">Enviar</button>
        </div>
      </form>

    </div>

  </body>
</html>
