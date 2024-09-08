<!DOCTYPE html>
<html lang="pt-br">

<head>
  <?php require("components/header_links.php") ?>

  <title>Guia de Estudos Júnior</title>
</head>

<body>

  <!--Cabeçalho-->
  <?php require("components/menu.php") ?>

  <!--Formulario Cadastro-->
  <center>
    <section class="pt-5 bg-sky">
      <div id="cadastro" class="pb-5 ">
        <form method="post" action="/loginRequest" target="_self">
          <h2>Cadastro</h2>
          <hr>
          <div class="grupo_form form-group">
            <input type="text" name="nome" id="nome" placeholder="Nome:" class="form-control form-control-sm my-2"
              autofocus>
            <input type="email" name="email" id="email" placeholder="E-mail:" class="form-control form-control-sm my-2">
            <input type="password" name="senha" id="senha" placeholder="Senha:"
              class="form-control form-control-sm my-2">
            <input type="password" name="confirmaSenha" id="confirmaSenha" placeholder="Confirme sua Senha:"
              class="form-control form-control-sm my-2">
            <h4 class="py-2 text-center">Área de Interesse</h4>
            <div class="text-left pl-3 py-auto">
              <label for="front">Front-end</label>
              <input type="radio" value="1" id="front" name="area_interesse" required><br>

              <label for="back">Back-end</label>
              <input type="radio" value="2" id="back" name="area_interesse" required><br>

              <label for="FS">Full Stack</label>
              <input type="radio" value="3" id="FS" name="area_interesse" required><br>
            </div>
          </div>

          <hr>
          <button class="btn btn-primary btn-lg m-2 w-75">Cadastrar</button>
          <hr>
        </form>
        <center><button class="btn btn-outline-warning w-50" onclick="window.location.href='/login'">Entrar
            Conta</button></center>
      </div>

      <div class="mt-5"><?php require("components/footer.php") ?></div>
    </section>
  </center>

  <?php require("components/javascript_links.php") ?>
</body>

</html>