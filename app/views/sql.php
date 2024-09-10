<?php
//if (!array_key_exists(array_search($_SESSION['historico'], ['materia'=>'SQL',"tipo"=>"Linguagem de Programação","link"=>"/sql"]),$_SESSION['historico'])) {
  array_push($_SESSION["historico"], ['materia'=>'SQL',"tipo"=>"Linguagem de Programação","link"=>"/sql"]);
//}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
<?php include("components/header_links.php")?>
  <title>Guia de Estudos Júnior</title>
</head>

<body>
  <!--Cabeçalho-->
  <?php require("components/menu.php") ?>

  <section id="wiki">
    <div id="conteudos">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-12">
            <div class="col-12 profile bg-info rounded text-light" style=" background: linear-gradient(to right, rgb(249, 206, 158),rgb(234, 97, 0));"> 
              <hr class="profile">
              <img src="/Imagens/prototipação/sql.png" class="profile rounded">
              <hr>
              <b class="text-dark">O que é ?:</b><br>SQL ou Structured Query Language (Linguagem de Consulta Estruturada) é uma linguagem padrão de gerenciamento de dados que interage com os principais bancos de dados baseados no modelo relacional.
              <hr>
              <b class="text-dark">Surgimento:</b>Surgiu em meados da década de 70, resultado de um estudo de E. F. Codd, membro do laboratório de pesquisa da IBM em San Jose
              <hr>
              <b class="text-dark">Versão Atual:</b>SQL:2016 <h6>(Informação não validada corretamente)</h6>
              <hr>
             </div>
          </div>

          <div class="col-md-9 col-sm-12 py-3 texto" style="background: linear-gradient(to right, rgb(234, 97, 0), rgb(249, 206, 158));">
            <div class="col-12 ">
            
            <p class="text-light bg-danger p-2 rounded">As Seguintes ferramentas são necessarias para prosseguir o estudo de SQL</p>

               <h3 class="text-light p-2"> Instalação do MySQL Workbench no Windows</h3>
                <div class="m-2 p-2 bg-light rounded"> 
                <h6>1. Baixar o MySQL Workbench:</h6>
                <ul>
                <li>Acesse o site oficial do MySQL.</li>
                <li>Selecione a versão mais recente do MySQL Workbench para Windows.</li>
                <li>Clique em "Download" e, em seguida, em "No thanks, just start my download" para evitar a criação de uma conta.</li>
                </ul>
                <h6> 2. Instalar o MySQL Workbench:</h6>
                  <ul>
                    <li>Após o download, abra o arquivo executável (.msi).</li>
                    <li>Siga as instruções do assistente de instalação.</li>
                    <li>Aceite os termos da licença..</li>
                    <li>Escolha a opção de instalação completa ou personalizada conforme suas necessidades.</li>
                    <li>Conclua a instalação e clique em "Finish".</li>
                  </ul>
                <h6> 3. Abrir o MySQL Workbench:</h6>
                <ul><li>Após a instalação, abra o MySQL Workbench a partir do menu Iniciar ou da área de trabalho.</li></ul>
                <hr>
                <p>Video De Apoio</p>
                <iframe class='suporte_video'src="https://www.youtube.com/embed/a5ul8o76Hqw?si=z1--AmxWluYqDpNG"  allow="autoplay; encrypted-media; picture-in-picture;"  referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>

                <h3 class="text-light p-2">Instalação do MySQL Workbench no Linux (Ubuntu/Debian)</h3>
                <div class="m-2 p-2 bg-light rounded"> 
                <h6> 1. Adicionar o repositório MySQL APT:</h6>
                <ul>
                <li>Baixe o pacote do repositório APT MySQL: sh wget <br><a class="text-light" href="https://dev.mysql.com/get/mysql-apt-config_0.8.17-1_all.deb">https://dev.mysql.com/get/mysql-apt-config_0.8.17-1_all.deb</a></li>
                <li>Instale o pacote baixado: sh sudo dpkg -i mysql-apt-config_0.8.17-1_all.deb</li>
                </ul>
                <h6>2. Atualizar a lista de pacotes:</h6>
                <ul><li>Atualize a lista de pacotes disponíveis: sh sudo apt-get update</li></ul>
                <h6>3. Instalar o MySQL Workbench:</h6>
                <ul><li> Instale o MySQL Workbench: sh sudo apt-get install mysql-workbench</li></ul>
                <h6>4. Abrir o MySQL Workbench:</h6>
                <ul><li>Após a instalação, abra o MySQL Workbench a partir do menu de aplicativos ou utilizando o terminal: sh mysql-workbench</li></ul>
                <iframe class="suporte_video" src="https://www.youtube.com/embed/Gw8_QOicyIQ?si=YADZrydbS8Iuwy33" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>

                  <h3 class="text-light p-2">Instalação do WampServer no Windows</h3>
                    <div class="m-2 p-2 bg-light rounded">    
                      <h6>1. Baixar o WampServer:</h6>
                          <ul>
                            <li>Acesse o site oficial do WampServer.</li>
                            <li>Clique em "Downloads" e escolha a versão adequada para o seu sistema (32 bits ou 64 bits).</li>
                            <li>Clique no link de download e, em seguida, clique em "Download directly" para iniciar o download.</li>
                          </ul>
                      <h6>2. Instalar o WampServer:</h6>
                      <ul>
                        <li>Após o download, abra o arquivo executável (.exe).</li>
                        <li>Siga as instruções do assistente de instalação.</li>
                        <li> Aceite os termos da licença.</li>
                        <li>Escolha o diretório de instalação (por padrão, é C:\wamp).</li>
                        <li>Conclua a instalação.</li>
                      </ul>
                      <h6> 3. Configurar o WampServer:</h6>
                      <ul>
                        <li>Durante a instalação, pode ser solicitado que você escolha um navegador padrão e um editor de texto. Você pode escolher o navegador e editor de sua preferência.</li>
                        <li>Após a instalação, inicie o WampServer a partir do menu Iniciar ou da área de trabalho.</li>
                        <li> Você verá um ícone do WampServer na bandeja do sistema (próximo ao relógio). Quando o ícone estiver verde, significa que todos os serviços estão funcionando corretamente.</li>
                      </ul>
                    <h6>4. Testar a instalação:</h6>
                          <ul>
                            <li>◦ Abra o navegador e digite http://localhost/ na barra de endereços. Você deve ver a página inicial do WampServer.</li>
                          </ul>
                        <iframe class="suporte_video" src="https://www.youtube.com/embed/dDoiJZxKMv8?si=ikDKGWQGoXMFvIWy" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                  </div>

                  <h3 class="text-light p-2">Instalação do XAMPP no Linux</h3>
                    <div class="m-2 p-2 bg-light rounded">
                      <h6> 1. Baixar o XAMPP:</h6>
                      <ul>
                        <li>  Acesse o site oficial do XAMPP.</li>
                        <li>Clique em "Download" e selecione a versão adequada para Linux.</li>
                        <li>Baixe o arquivo do instalador (.run).</li>
                      </ul>
                      <h6>2. Dar permissão de execução ao arquivo:</h6>
                        <ul>
                          <li><strong>Abra o terminal e navegue até o diretório onde o arquivo foi baixado.</strong></li>
                          <li><strong>Dê permissão de execução ao arquivo com o comando:</strong> sh chmod +x xampp-linux-x64-&lt;versao&gt;.run<br>
                          <strong>Substitua</strong> &lt;versao&gt; <strong>versão específica do XAMPP que você baixou.</strong></li>
                        </ul>
                      <h6>3. Instalar o XAMPP:</h6>
                          <ul>
                            <li>Execute o instalador com o comando: sh sudo ./xampp-linux-x64-&lt;versao&gt;.run<br>
                              Siga as instruções do assistente de instalação.</li>
                          </ul>
                      <h6>4. Iniciar o XAMPP:</h6>
                          <ul>
                            <li>Após a instalação, você pode iniciar o XAMPP com o comando:
                  sh
                  sudo /opt/lampp/lampp start</li>
                          </ul>
                  <h6>5. Testar a instalação:</h6>
                          <ul>
                            <li>Abra o navegador e digite <a href="http://localhost/" class="text-primary">http://localhost/</a> na barra de endereços. Você deve ver a página inicial do XAMPP.</li>
                          </ul>
              </div>
              <p class="bg-success p-3 rounded text-light text-capitalize">Após a instalação das ferramentas acima, de acordo com seu sistema operacional, vamos dar nossos primeiros passos</p>
            
            <h3 class="text-light p-2">Primeiros Passos</h3>
            <div class="m-2 p-2 bg-light rounded texto">
            <h6>1. Criar um Banco de Dados</h6>
           
              <p>
              Abra o terminal do MySQL e crie um novo banco de dados com o comando:<br>
              CREATE DATABASE bancodeteste:<br>
              Este comando cria um banco de dados chamado bancodeteste.
              </p>
            <h6>2. Usar o Banco de Dados</h6>
            <p>
              Selecione o banco de dados que você acabou de criar com o comando:<br>
              USE bancodeteste;<br>
              Isso informa ao MySQL que você deseja trabalhar com esse banco de dados.
              </p>
              <h6>3. Criar Tabela</h6>
              <p> Crie uma tabela chamada fornecedores com o comando:</p>
              <div class="codigo">
                <code>
                CREATE TABLE fornecedores(
                    codigo int(4) AUTO_INCREMENT,
                    nome varchar(30) NOT NULL,
                    email varchar(50),
                    PRIMARY KEY (codigo)
                );
              </code>
              </div>
              <p> Este comando cria uma tabela com três colunas: codigo, nome, e email.</p>

              <h6>4. Inserir Dados</h6>
              <p>Adicione registros à tabela usando o comando:</p>
              <div class="codigo">
                <code>
                INSERT INTO fornecedores(codigo, nome, email) VALUES (null, 'Ricardo', 'ricoarrigoni@gmail.com');
                INSERT INTO fornecedores(codigo, nome, email) VALUES (null, 'João', 'joao@gmail.com');
                INSERT INTO fornecedores(codigo, nome, email) VALUES (null, 'Maria', 'maria@gmail.com');
              </code>
              </div>
              <p>Este comando insere três novos registros na tabela fornecedores.</p>

              <h6>5. Selecionar Dados</h6>
              <p>Recupere todos os registros da tabela com o comando:</p>
              <code>SELECT * FROM fornecedores;</code>
              <p>Este comando seleciona e exibe todos os registros da tabela fornecedores.</p>

              <h6>6. Ordenar Resultados</h6>
              <p>Ordene os registros pelo nome em ordem alfabética com o comando:</p>
              <code>SELECT * FROM fornecedores ORDER BY nome ASC;</code>
              <p>O termo ASC indica ordem ascendente. Use DESC para ordem descendente.</p>

              <h6>7. Atualizar Dados</h6>
              <p>Atualize um registro específico com o comando:</p>
              <code>UPDATE fornecedores SET nome='Ricardo Arrigoni' WHERE codigo=1;</code>
              <p>Este comando altera o nome do fornecedor com código 1 para "Ricardo Arrigoni".</p>

              <h6>10. Excluir Dados</h6>
              <p>Remova um registro específico da tabela com o comando:</p>
              <code>DELETE FROM fornecedores WHERE codigo=3;</code>
              <br>

              <h5 class="m-3">Bibliografia:<a href="https://www.devmedia.com.br/primeiros-passos-no-mysql/28438">https://www.devmedia.com.br/primeiros-passos-no-mysql/28438</a> </h5>   
            </div>
            
            <h3 class="text-light p-2">Exercicios</h3>
            <div class="m-2 p-2 bg-light rounded texto">
              <h6>Exercícios</h6>
             <p> 1) Criar uma tabela de dados no MySQL para clientes de uma empresa de telecomunicações. Esses clientes devem ser gerenciados pelos campos de CPF, Nome, Data de Nascimento, Endereço, CEP, Bairro, Cidade e UF. </p>
             <p> 2) Após criar a tabela acima especificada adicionar um campo para armazenar a data da última compra. </p>
             <p> 3) Inserir na tabela Clientes três clientes, conforme seguem: </p>
             <ul>
              <li> 04496332780, João da Silva, 25/11/1969, Rua Antônio Numes, 88045963, Palmeiras, Londrina, PR. </li>
              <li> 05485031490, Ana Regina Fagundes, 21/09/1986, Rua Palmeias Novas, 88078923, Leblon, Rio de Janeiro, RJ.</li>
              <li> 03350314905, Fernando Soares, 05/03/1990, Rua Palmeias Novas, 88048917, Copacabana, Rio de Janeiro, RJ.</li>
             </ul>         
             <p> 4) Selecionar todos os clientes que residam na cidade do Rio de Janeiro. </p>
              <p>  5) Deletar os clientes que residam na cidade de Londrina.</p>
              
            </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php require("components/footer.php")?>
    <?php require("components/javascript_links.php")?>
</body>

</html>