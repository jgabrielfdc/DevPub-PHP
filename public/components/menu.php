<!--Cabeçalho-->
<header>

  <nav class="navbar navbar-expand-sm navbar-light navega" style="overflow-y:visible; max-height:307.6px;">
    <div class="container">
      <!--Logo Site-->
      <a href="./" class="navbar-brand p-1 rounded alert alert-info my-auto">
        <img src="Imagens/gej (2).png" width="60">
        <span class="nav-brand text-dark mr-2">DevHub</span>
      </a>
      <!--<h2>Rainer</h2>-->
      <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse float-sm-left" id="nav-principal">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/materiais">Materiais</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/equipe">Equipe</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/intro">Sobre</a>
          </li>

          <li class="nav-item">
            <?php

              if ($_SESSION['autenticado'] == true) {
              echo '<div class="dropdown usuarioFeed float-right">
                      <button class="btn btn-info bg-transparent rounded border-0 shadow-none" data-toggle="dropdown" type="button">
                          <img src="imagens/eduardi.jpeg" class="rounded-circle" width="50" height="50">
                      </button>
                      <div class="dropdown-menu bg-light float-sm-left" style="max-width:100px; z-index: 1000000 !important;">
                          <a href="/usuario" class="dropdown-item">Conta</a>
                          <a href="/contact" class="dropdown-item">Suporte</a>
                          <div class="dropdown-divider"></div>
                          <center>
                           <a href="/logout" class="dropdown-item badge badge-danger w-50 h-50">Sair</a>
                          </center>
                      </div>
                  </div> <div class="clearfix"></div>';
            } else {
              echo "<a href='/login' class='btn btn-light mt-3'><span class='text-secondary'>Entrar</span></a>";
            } 
            
            ?>
          </li>

        </ul>
      </div>
    </div>

  </nav>
</header>