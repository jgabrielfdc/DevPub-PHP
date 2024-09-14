<!DOCTYPE html>
<html lang="pt-br">

<head>
  <?php require("components/header_links.php") ?>
  <title>DevPub - HTML</title>
</head>

<body>
  <?php require("components/menu.php") ?>

  <section id="wiki">
    <div id="conteudos">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-12">
            <div class="sticky-top">
              <div style="height:15px;" class="sticky-top"></div>
              <div class="col-12 profile bg-info rounded text-light"
                style=" background: linear-gradient(to right, rgb(249, 206, 158),rgb(234, 97, 0));">

                <hr class="profile">
                <img src="/Imagens/prototipação/html.jpg" class="profile rounded">
                <hr>
                <b class="text-dark">O que é ?:</b><br>HTML é uma linguagem de marcação de hipertexto
                utilizada na criação de documentos e páginas da web..
                <hr>
                <b class="text-dark">Surgimento:</b>criado na década de 1990 pelo físico britânico Tim
                Berners-Lee, considerado o “pai da web”, para auxiliar na formatação dos documentos de
                pesquisas compartilhados entre ele e seus colegas.
                <hr>
                <b class="text-dark">Versão Atual:</b>HTML 5
                <hr>
              </div>
            </div>
          </div>

          <div class="col-md-9 col-sm-12 py-3 texto clearfix"
            style="background: linear-gradient(to right, rgb(234, 97, 0), rgb(249, 206, 158));">
            <div class="col-12 ">

              <p class="text-light bg-danger p-2 rounded">As Seguintes ferramentas são necessarias para
                prosseguir o estudo de SQL</p>

              <h3 class="text-light p-2"> Instalação VS Code</h3>
              <div class="m-2 p-2 bg-light rounded">
                <h6><b>Baixe o VS Code:</b></h6>
                <p>Acesse o site oficial do Visual Studio Code em <a
                    href="https://code.visualstudio.com/download">code.visualstudio.com</a> e baixe
                  o instalador para Windows.</p>
                <h6><b>Execute o instalador:</b></h6>
                <p>Depois de baixar o instalador, execute-o clicando duas vezes no arquivo baixado. O
                  assistente de instalação será iniciado.</p>
                <h6><b>Instale o VS Code:</b></h6>
                <p>Siga as instruções do assistente de instalação para instalar o VS Code. Você pode
                  escolher as opções padrão ou personalizar a instalação de acordo com suas
                  preferências.</p>
                <h6><b>Abrir o VS Code: </b></h6>
                <p>Após a instalação, abra o VS Code. Você pode encontrá-lo no menu Iniciar ou na área
                  de trabalho, dependendo das opções selecionadas durante a instalação.</p>
                <h6><b>Extensões</b></h6>
                <p>Para auxiliar no desenvolvimento, sugerimos utilizar a extensão Live Server,
                  pressione o atalho CTRL+SHIFT+X, e procure a por "live server", após a instalação
                  pressione o botão "Go Live" no canto inferior direito do VS Code</p>
                <hr>
                <h3>Instalação para Windows</h3>
                <iframe class="suporte_video" src="https://www.youtube.com/embed/FWnZBah0WLc?si=BAReagCZeBLH5mKz"
                  title="YouTube video player" frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                  referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <hr>
                <h3>Instalação para Linux</h3>
                <iframe class="suporte_video" src="https://www.youtube.com/embed/5_6p8LmC8dQ?si=Cpb4blwTbLAZVh7O"
                  title="YouTube video player" frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                  referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
              </div>
              <p class="bg-success p-3 rounded text-light text-capitalize">Após a instalação das
                ferramentas acima, de acordo com seu sistema operacional, vamos dar nossos primeiros
                passos</p>

              <h3 class="text-light p-2">Tags em HTML</h3>
              <div class="m-2 p-2 bg-light rounded">
                <pre class="text-break">

Existem muitas tags em HTML para criar e estruturar o conteúdo de uma página da web. Aqui estão algumas das 
mais comuns, juntamente com exemplos de como são usadas:
&lt;html&gt;: Define o início e o fim do documento HTML.

  &lt;html&gt;
  &lt;!-- Conteúdo da página aqui --&gt;
  &lt;/html&gt;

&lt;head&gt; : Contém metadados sobre o documento, como título, links para folhas de estilo e scripts.

&lt;head&gt;
&lt;title&gt;Título da Página&lt;/title&gt;
&lt;link rel="stylesheet" href="estilos.css"&gt;
&lt;/head&gt;

&lt;body&gt;: Contém o conteúdo visível da página.

&lt;body&gt;
&lt;h1&gt;Meu Título&lt;/h1&gt;
&lt;p&gt;Meu parágrafo de texto.&lt;/p&gt;
&lt;/body&gt;

&lt;h1&gt; a &lt;h6&gt;: Define títulos de diferentes níveis de importância.

&lt;h1&gt;Título Principal&lt;/h1&gt;
&lt;h2&gt;Subtítulo&lt;/h2&gt;

&lt;p&gt;: Define um parágrafo de texto.

&lt;p&gt;Este é um parágrafo de texto.&lt;/p&gt;

&lt;a&gt;: Cria um link para outra página.

&lt;a href="https://www.exemplo.com"&gt;Link para Exemplo&lt;/a&gt;

&lt;img&gt;: Insere uma imagem na página.

&lt;img src="caminho/para/imagem.jpg" alt="Texto alternativo"&gt;

&lt;ul&gt; e &lt;ol&gt;: Cria listas não ordenadas e ordenadas, respectivamente.

&lt;ul&gt;
&lt;li&gt;Item 1&lt;/li&gt;
&lt;li&gt;Item 2&lt;/li&gt;
&lt;/ul&gt;

&lt;table&gt;: Cria uma tabela.

&lt;table&gt;
&lt;tr&gt;
&lt;td&gt;Célula 1&lt;/td&gt;
&lt;td&gt;Célula 2&lt;/td&gt;
&lt;/tr&gt;
&lt;/table&gt;

&lt;div&gt; e &lt;span&gt;: São contêineres genéricos usados para agrupar elementos.

&lt;div&gt;
&lt;p&gt;Um parágrafo dentro de uma divisão.&lt;/p&gt;
&lt;/div&gt;

&lt;span&gt;Um texto em linha.&lt;/span&gt;

<p>Estes são apenas alguns exemplos. HTML possui muitas outras tags para criar páginas da web ricas e interativas.</p>
<h3>Exercicios</h3>
<p>Criar uma Página Simples: Crie uma página HTML simples que contenha um título, um parágrafo de texto e um link para uma página externa. 
  Use as tags &lt;html&gt;, &lt;head&gt;, &lt;body&gt;, &lt;h1&gt;, &lt;p&gt; e &lt;a&gt;.
Lista de Compras: Crie uma lista de compras usando uma lista não ordenada &lt;ul&gt; com pelo menos cinco itens. Cada item deve ser um 
produto que você precisa comprar.
Tabela de Horários: Crie uma tabela de horários simples com pelo menos duas linhas e duas colunas. As células da tabela devem conter
 informações sobre suas atividades diárias em diferentes horários.
Esses exercícios são simples, mas ajudarão a consolidar o uso das tags HTML básicas.</p>

<p>Estrutura básica HTML
A estrutura básica de um documento HTML é composta por algumas tags fundamentais que definem a estrutura e o conteúdo da página. 
Aqui está a estrutura básica de um documento HTML:</p>
&lt;!DOCTYPE html&gt;
&lt;html lang="pt-br"&gt;
&lt;head&gt;
&lt;meta charset="UTF-8"&gt;
&lt;meta http-equiv="X-UA-Compatible" content="IE=edge"&gt;&lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
&lt;title&gt;Título da Página&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;!-- Conteúdo da página aqui --&gt;
&lt;/body&gt;
&lt;/html&gt;

<p>Vamos explicar cada parte:</p>

&lt;!DOCTYPE html&gt;: Declaração do tipo de documento. Indica que o documento é um documento HTML5.
&lt;html&gt;: Tag raiz que engloba todo o conteúdo HTML da página.
lang="pt-br": Atributo que define o idioma da página (neste caso, Português do Brasil).
&lt;head&gt;: Contém metadados sobre o documento, como o título da página, links para folhas de estilo (CSS), 
scripts, entre outros.
&lt;meta charset="UTF-8"&gt;: Define o conjunto de caracteres UTF-8 para suportar a maioria dos idiomas e 
caracteres especiais.
&lt;meta http-equiv="X-UA-Compatible" content="IE=edge"&gt;: Instrui o Internet Explorer a usar a versão mais 
recente do mecanismo de renderização disponível.
&lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;: Controla a largura da viewport e a escala inicial da página
 em dispositivos móveis.
&lt;title&gt;Título da Página&lt;/title&gt;: Define o título da página que aparece na aba/janela do navegador.
&lt;body&gt;: Contém o conteúdo visível da página, como texto, imagens, vídeos, etc.

<p>Essa é a estrutura básica que você deve ter em um documento HTML. 
  A partir daqui, você pode adicionar mais elementos e tags para criar o conteúdo desejado para sua página web.</p>

Titulos e paragragos em HTML
Em HTML, os títulos e parágrafos são elementos fundamentais para estruturar o conteúdo de 
uma página. Aqui está como você pode usar esses elementos:
Títulos (&lt;h1&gt; a &lt;h6&gt;): Os títulos são usados para representar a hierarquia e a importância do texto. 
O &lt;h1&gt; é o título mais importante e o &lt;h6&gt; é o menos importante. Por exemplo:
&lt;h1&gt;Título Principal&lt;/h1&gt;
&lt;h2&gt;Subtítulo&lt;/h2&gt;
&lt;h3&gt;Subtítulo Menor&lt;/h3&gt;
Parágrafos (&lt;p&gt;): Os parágrafos são usados para agrupar blocos de texto. Por exemplo:
&lt;p&gt;Este é um parágrafo de texto.&lt;/p&gt;
&lt;p&gt;Este é outro parágrafo de texto.&lt;/p&gt;
Exemplo completo:
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
&lt;title&gt;Exemplo de Títulos e Parágrafos&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;h1&gt;Título Principal&lt;/h1&gt;
&lt;p&gt;Este é um parágrafo de texto.&lt;/p&gt;
&lt;h2&gt;Subtítulo&lt;/h2&gt;
&lt;p&gt;Este é outro parágrafo de texto.&lt;/p&gt;
&lt;h3&gt;Subtítulo Menor&lt;/h3&gt;
&lt;p&gt;Mais um parágrafo de texto.&lt;/p&gt;
&lt;/body&gt;
&lt;/html&gt;
Esses elementos são essenciais para criar uma estrutura clara e bem organizada em suas 
páginas HTML.

Imagens em HTML
Para exibir imagens em uma página HTML, você pode usar a tag &lt;img&gt;. Aqui está um exemplo
básico de como usar essa tag:
Sintaxe básica:
&lt;img src="caminho_para_a_imagem.jpg" alt="Texto alternativo"&gt;
src: Especifica o caminho para a imagem.
alt: Fornece um texto alternativo para a imagem, importante para acessibilidade e SEO.
Exemplo completo:
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
&lt;title&gt;Exemplo de Imagem&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;h1&gt;Minha Imagem&lt;/h1&gt;
&lt;img src="caminho_para_a_imagem.jpg" alt="Minha Imagem"&gt;
&lt;/body&gt;
&lt;/html&gt;
Certifique-se de substituir "caminho_para_a_imagem.jpg" pelo caminho real para sua imagem. 
O caminho pode ser relativo (por exemplo, imagens/minha_imagem.jpg se a imagem estiver em uma 
pasta chamada "imagens" no mesmo diretório do arquivo HTML) ou absoluto 
(por exemplo, https://www.example.com/imagens/minha_imagem.jpg para uma imagem online).

Além disso, é importante incluir um texto alternativo descritivo para sua imagem, pois isso ajuda 
os usuários que não podem visualizar a imagem a entender o conteúdo e também é considerado uma 
prática recomendada para SEO.


Listas em HTML
Em HTML, você pode criar listas ordenadas (&lt;ol&gt;) e listas não ordenadas (&lt;ul&gt;) para organizar 
informações de forma estruturada. Aqui estão exemplos de como usar essas tags:
Lista não ordenada (&lt;ul&gt;): Usada para criar uma lista de itens sem uma ordem específica. 
Cada item
é marcado com um ponto.
&lt;ul&gt;
&lt;li&gt;Item 1&lt;/li&gt;
&lt;li&gt;Item 2&lt;/li&gt;
&lt;li&gt;Item 3&lt;/li&gt;
&lt;/ul&gt;
Lista ordenada (&lt;ol&gt;): Usada para criar uma lista de itens em uma ordem específica. Cada item é <br>numerado automaticamente.
&lt;ol&gt;
&lt;li&gt;Primeiro item&lt;/li&gt;
&lt;li&gt;Segundo item&lt;/li&gt;
&lt;li&gt;Terceiro item&lt;/li&gt;
&lt;/ol&gt;
Lista aninhada: Você também pode aninhar listas, colocando uma lista dentro de outra. Por exemplo:
&lt;ul&gt;
&lt;li&gt;Item 1&lt;/li&gt;
&lt;li&gt;Item 2
&lt;ul&gt;
&lt;li&gt;Subitem 2.1&lt;/li&gt;
&lt;li&gt;Subitem 2.2&lt;/li&gt;
&lt;/ul&gt;
&lt;/li&gt;
&lt;li&gt;Item 3&lt;/li&gt;
&lt;/ul&gt;
Definição de lista (&lt;dl&gt;, &lt;dt&gt;, &lt;dd&gt;): Usada para criar uma lista de termos e suas definições.
&lt;dl&gt;
&lt;dt&gt;HTML&lt;/dt&gt;
&lt;dd&gt;Linguagem de Marcação de Hipertexto.&lt;/dd&gt;
&lt;dt&gt;CSS&lt;/dt&gt;
&lt;dd&gt;Folhas de Estilo em Cascata.&lt;/dd&gt;
&lt;/dl&gt;
Lembre-se de que as listas em HTML são uma ótima maneira de organizar informações em seu conteúdo <br>da web, seja para criar menus, listas de itens ou definições.

Tabelas em HTML
Em HTML, você pode usar a tag &lt;table&gt; para criar tabelas. As tabelas são úteis para exibir dados <br>de forma tabular, como uma planilha. Aqui está um exemplo básico de como criar uma 
tabela simples em HTML:

&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
&lt;title&gt;Tabela HTML&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;h1&gt;Exemplo de Tabela&lt;/h1&gt;
&lt;table border="1"&gt;
&lt;tr&gt;
&lt;th&gt;Nome&lt;/th&gt;
&lt;th&gt;Idade&lt;/th&gt;
&lt;th&gt;Cidade&lt;/th&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;João&lt;/td&gt;
&lt;td&gt;30&lt;/td&gt;
&lt;td&gt;São Paulo&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;Maria&lt;/td&gt;
&lt;td&gt;25&lt;/td&gt;
&lt;td&gt;Rio de Janeiro&lt;/td&gt;
&lt;/tr&gt;
&lt;/table&gt;
&lt;/body&gt;
&lt;/html&gt;

Neste exemplo, usamos as seguintes tags:

    • &lt;table&gt;: Define a tabela.
    • &lt;tr&gt;: Define uma linha na tabela.
    • &lt;th&gt;: Define um cabeçalho de coluna. Usamos &lt;th&gt; em vez de &lt;td&gt; para a primeira linha da <br>tabela, que é geralmente usada para os cabeçalhos das colunas.
    • &lt;td&gt;: Define uma célula na tabela para dados.
    • border="1": Adiciona uma borda à tabela para torná-la visível. Este atributo é opcional e é <br>usado apenas para fins de demonstração.
    
Você também pode estilizar a tabela com CSS para alterar sua aparência, como cores, fontes <br>e espaçamento.
</pre>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
  <?php require("components/footer.php") ?>
  <?php require("components/javascript_links.php") ?>
</body>

</html>