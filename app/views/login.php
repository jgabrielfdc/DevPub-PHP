<!DOCTYPE html>
<html lang="pt-br">

<head>

  <?php include("components/header_links.php") ?>

  <title>DevPub - Login</title>
</head>

<body>
  <?php require("components/menu.php") ?>

  <center>
    <section id="home" class="pt-md-5 bg-sky">

      <div id="login" class="mb-0">
        <form method="post" action="/usuario" target="_self">
          <h2>Login</h2>
          <hr>
          <div class="grupo_form form-group">

            <input type="email" name="email" id="email" placeholder="E-mail:" class="form-control form-control-sm m-1"
              required>

            <input type="password" name="senha" id="senha" placeholder="Senha:" class="form-control form-control-sm m-1"
              required>

          </div>
          <hr>

          <button class="btn btn-primary btn-lg w-75">Logar</button>

          <hr>

        </form>

        <button class="btn btn-outline-danger w-50" onclick="window.location.href='/cadastro'">Criar Conta</button>

      </div>
      <div class="fixed-bottom"><?php require("components/footer.php") ?></div>
    </section>
  </center>
 
  <?php require("components/javascript_links.php") ?>
</body>

</html>