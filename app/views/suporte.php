<!DOCTYPE html>
<html lang="pt-br">

<head>
  <?php include("components/header_links.php") ?>
  <title>DevPub - Suporte</title>
</head>

<body>
  <?php include("components/menu.php") ?>

  <center>
    <section id="suporte" class="pt-3 bg-sky" style="z-index:3 !important;">
    <div>
      <form id="cadastro"
        action="https://formsubmit.co/ajax/authentcgj186@gmail.com"
        method="POST"
        data-form>

        <h3 class="text-md-center">Envie sua Dúvida</h3>
        <input type="text" name="nome" id="nome" Placeholder='Insira seu Nome' class="form-control my-2" required />
        <input type="email" name="email" id="email" placeholder="Insira seu E-mail" class="form-control my-2" required />
        <hr>
        <center><textarea name="mensagem" id="mensagem" placeholder="Sua dúvida aqui" class="form-control" required style="max-height:190px; height:190px; min-height:190px; overflow-y:scroll;"></textarea></center><br>
        <center><button type="submit" data-button class="btn btn-info botao_suporte">Enviar</button></center>
      </form>

    </div>

  </section></center>

  <?php require("components/footer.php") ?>
  <?php echo"<script src='email.js' type='text/javascript'></script>"; ?>

  <?php require("components/javascript_links.php") ?>
</body>

</html>