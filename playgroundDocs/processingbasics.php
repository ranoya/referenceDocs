<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name = "pinterest" content = "nopin" />
    <meta name="pinterest" content="nohover">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Iniciando com Processing | ReferenceDocs</title>
    <meta name="generator" content="ReferenceDocs" />
    <meta name="description" content="Guia de referencia de programação em Processing">
    <meta name="author" content="Prof. Dr. Guilherme Ranoya">
    <meta name="keywords" content="programação criativa, arte generativa, design generativo, design paramétrico, código criativo, processing">
    <meta property="og:url" content="<?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; echo $actual_link; ?>">
    <meta property="og:title" content="Iniciando com Processing | ReferenceDocs">
    <meta property="og:description" content="Guia de referencia de programação em Processing">
    <meta property="og:type" content="article">
    <meta property="og:locale" content="pt_BR">
    <meta property="og:image:width" content="600">
    <meta property="og:image:height" content="600">
    <meta property="og:site_name" content="ranoya.com">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image" content="https://www.ranoya.com/aulas/playgroundDocs/cover.jpg" />
    <meta property="og:image:secure_url" content="https://www.ranoya.com/aulas/playgroundDocs/cover.jpg">
    <link rel="image_src" type="image/jpg" href="https://www.ranoya.com/aulas/playgroundDocs/cover.jpg" />
    <link REL="SHORTCUT ICON" HREF="https://www.ranoya.com/aulas/playgroundDocs/icon.png">

    <meta name="theme-color" content="#8487BE">
    <meta name="msapplication-navbutton-color" content="#8487BE">
    <meta name="apple-mobile-web-app-status-bar-style" content="#8487BE">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://www.ranoya.com/aulas/playgroundDocs/dev2.js"></script>
</head>
<body>

  <script>

  acegeneralconfig = { 
    maxLines: Infinity,
    enableBasicAutocompletion: true,
    enableSnippets: true,
    enableLiveAutocompletion: false,
    showPrintMargin: false,
    highlightSelectedWord: true
  };

  </script>
  <div id="texto">
  <h1>Iniciando com Processing</h1>

  <p>Duas funções especiais precisam ser declaradas em um código de Processing para que ele funcione: a função <a href="javascript:carrega('fun-setup.php');"><strong>setup()</strong></a> e a função <a href="javascript:carrega('fun-draw.php');"><strong>draw()</strong></a>. A função <a href="javascript:carrega('fun-setup.php');"><strong>setup()</strong></a> é responsável por configurar o documento / sketch, e estabelecer valores ou definições iniciais para as variáveis e funções. Já a função <a href="javascript:carrega('fun-draw.php');"><strong>draw()</strong></a> é quem efetivamente realiza o trabalho de desenhar coisas na tela, sendo executada pela máquina computacional continuamente, na velocidade definida através de <a href="javascript:carrega('fun-frameRate.php');"><strong>frameRate()</strong></a>, geralmente dentro de <a href="javascript:carrega('fun-setup.php');"><strong>setup()</strong></a>.</p>

  <p>Todo código processing deve ter, no mínimo, estas duas funções declaradas. Elas fazem parte da estrutura mínima da programação em Processing. No exemplo abaixo, a função <a href="javascript:carrega('fun-setup.php');"><strong>setup()</strong></a> configura um sketch de 150 x 150 pixels <a href="javascript:carrega('fun-size.php');"><strong>size(<span class="marca">150</span>,<span class="marca">150</span>)</strong></a>, estabelece uma cor de fundo cinza clara <a href="javascript:carrega('fun-background.php');"><strong>background(<span class="marca">#eeeeee</span>)</strong></a>, uma taxa de atualização de 20 quadros por segundo <a href="javascript:carrega('fun-frameRate.php');"><strong>frameRate(<span class="marca">20</span>)</strong></a>, cores laranjas para as bordas <a href="javascript:carrega('fun-stroke.php');"><strong>stroke(<span class="marca">#F5871F</span>)</strong></a> e preenchimento <a href="javascript:carrega('fun-fill.php');"><strong>fill(<span class="marca">#F5871F</span>)</strong></a> do que for desenhado, e uma espessura de 2 pixels para as bordas ou linhas <a href="javascript:carrega('fun-strokeWeight.php');"><strong>strokeWeight(<span class="marca">2</span>)</strong></a>. Exceto pela a instrução <a href="javascript:carrega('fun-size.php');"><strong>size()</strong></a>, todas as demais definições poderiam ter sido feitas normalmente dentro de <a href="javascript:carrega('fun-draw.php');"><strong>draw()</strong></a>, ao invés de <a href="javascript:carrega('fun-setup.php');"><strong>setup()</strong></a> - mais precisamente, para cada elemento que for desenhado, convem definir todas as suas características no momento que o código responsável pelo desenho for colocado em <a href="javascript:carrega('fun-draw.php');"><strong>draw()</strong></a>.</p>

  <p>Neste mesmo exemplo, a função <a href="javascript:carrega('fun-draw.php');"><strong>draw()</strong></a> só realiza uma única tarefa: desenhar um quadrado com seu canto superior esquerdo nas posições 20 x 20 (pixels) do campo ortogonal presente no sketch, com dimensão de 110 x 110 pixels <a href="javascript:carrega('fun-rect.php');"><strong>rect(<span class="marca">20</span>,<span class="marca">20</span>,<span class="marca">110</span>,<span class="marca">110</span>)</strong></a>. É importante frisar que este retângulo está sendo repetidamente desenhado, um sobre o outro, em uma frequência de 20 vezes por segundo. Como não há nenhuma instrução para que o sketch seja apagado em cada vez que <a href="javascript:carrega('fun-draw.php');"><strong>draw()</strong></a> é executada, o desenho sobrepõe o que já está lá. Experimente alterar as cores na função <a href="javascript:carrega('fun-setup.php');"><strong>setup()</strong></a> ou modificar o que é desenhado para um círculo ou elípse, através da função <a href="javascript:carrega('fun-ellipse.php');"><strong>ellipse(<span class="marca">x</span>,<span class="marca">y</span>,<span class="marca">w</span>,<span class="marca">h</span>)</strong></a>.</p>

<div class="diagramahalf firstblock">
<iframe id="View_editor_1"></iframe>
</div>
<div class="diagramahalf">
<pre class='editor codefull' data-name='editor_1' id='editor_1' data-linguagem="java" data-acetheme="tomorrow">
void setup() {
  
  size(150,150);
  background(#eeeeee);
  frameRate(20);
  stroke(#78008A);
  strokeWeight(2);
  fill(#78008A);

}

void draw() {
  
  rect(20,20,110,110);

}</pre>

<script>

  Predata_editor_1 = "<styl" + "e>body, html { margin: 0; padding: 0; }</sty" + "le>" + "<canvas id='pjs' " + "style='outline: none;'>" + " </canvas><scri"+ "pt src='https://www.ranoya.com/public/dev/processing.min.js'></sc" + "ript><scrip" + "t type='application/processing' data-processing-target='pjs'>";

  Predata_editor_2 = "<styl" + "e>body, html { margin: 0; padding: 0; }</sty" + "le>" + "<canvas id='pjs' " + "style='outline: none;'>" + " </canvas><scri"+ "pt src='https://www.ranoya.com/public/dev/processing.min.js'></sc" + "ript><scrip" + "t type='application/processing' data-processing-target='pjs'>" + "void setup() { size(150,150); background(#eeeeee); frameRate(20); stroke(#78008A); strokeWeight(2); fill(#78008A); }";

  Predata_editor_3 = Predata_editor_2;
  Predata_editor_4 = Predata_editor_2;
  Predata_editor_5 = Predata_editor_2;

  Postdata_editor_1 = "</scr" + "ipt>";
  Postdata_editor_2 = Postdata_editor_1;
  Postdata_editor_3 = Postdata_editor_1;
  Postdata_editor_4 = Postdata_editor_1;
  Postdata_editor_5 = Postdata_editor_1;


  
</script>


</div>

  <p>Utilizando as mesmas configurações de <a href="javascript:carrega('fun-setup.php');"><strong>setup()</strong></a>, o exemplo abaixo desenha um pequeno círculo na posição em que o mouse se encontra sobre o sketch <a href="javascript:carrega('fun-ellipse.php');"><strong>ellipse(<span class="marca">mouseX</span>, <span class="marca">mouseY</span>, <span class="marca">15</span>, <span class="marca">15</span>)</strong></a>. Novamente, como nenhuma instrução é dada para que a tela seja limpa, o circulo vai deixando um rastro por onde o mouse passar. Experimente incluir uma instrução para que a tela seja limpa antes que o circulo seja desenhado, através da instrução <a href="javascript:carrega('fun-background.php');"><strong>background()</strong></a>.</p>

<div class="diagramahalf firstblock">
<iframe id="View_editor_2"></iframe>
</div>

<div class="diagramahalf">
<pre class='editor codefull' data-name='editor_2' id='editor_2' data-linguagem="java" data-acetheme="tomorrow">
void draw() {
  
  ellipse(mouseX, mouseY, 15, 15);

}</pre>
</div>

<p></p>
<h3><span class="marca">Escopo</span></h3>
<p>Você pode declarar novas funções ou novas variáveis ao longo do código na medida que precisar. No exemplo abaixo, declaramos a função <strong>rastro()</strong> que faz a mesma coisa que o exemplo anterior: desenha um circulo na posição do mouse. Mas <strong>rastro()</strong> não é uma função executada automaticamente pela máquina computacional; as únicas funções que são executadas automaticamente são <a href="javascript:carrega('fun-setup.php');"><strong>setup()</strong></a> uma única vez, e <a href="javascript:carrega('fun-draw.php');"><strong>draw()</strong></a> continuamente. Se <strong>rastro()</strong> fosse chamada à partir de <a href="javascript:carrega('fun-setup.php');"><strong>setup()</strong></a>, teríamos apenas um círculo, provavelmente na posição 0 x 0 do campo ortogonal, desenhado imediatamente no momento que o processamento do código é iniciado. Mas quando <strong>rastro()</strong> é chamada à partir de <a href="javascript:carrega('fun-draw.php');"><strong>draw()</strong></a>, ela passa a ser executada toda vez que <a href="javascript:carrega('fun-draw.php');"><strong>draw()</strong></a> é executada. Experimente cortar a chamada à <strong>rastro()</strong> dentro de <a href="javascript:carrega('fun-draw.php');"><strong>draw()</strong></a>, e o código não desenhará mais nada na tela.</p>

<p>Para que <strong>rastro()</strong> esteja acessível para ser chamada por outras funções no código, ela precisa ser declarada no mesmo nível hierárquico das demais funções. Funções não podem ser declaradas dentro de funções (ou variáveis dentro de variáveis); declarar uma função dentro de outra função resultará em um erro de código. Mas variáveis podem ser declaradas dentro de funções. Classes / objetos são um terceiro elemento de programação - que serão vistos posteriormente - que podem ter diversas funções e variáveis declaradas dentro deles.</p>

<p>As funções declaradas dentro de classes/objetos só são acessíveis aos próprios objetos, e não podem ser usadas em outros lugares, como em <a href="javascript:carrega('fun-draw.php');"><strong>draw()</strong></a> ou <a href="javascript:carrega('fun-setup.php');"><strong>setup()</strong></a>, assim como uma variável declarada dentro de uma função não é acessível/visível para outra função. Isso é chamado, em programação, de <span class="marca">escopo de variáveis e funções</span>.</p>

<p>Se a variável cor <strong>int cor = <span class="marca">#469CA2</span></strong> tivesse sido declarada dentro de <strong>rastro()</strong>, <a href="javascript:carrega('fun-draw.php');"><strong>draw()</strong></a> não saberia de sua existência, e o código pararia de funcionar em decorrência de um erro (uma variável que não existe por estar fora do escopo da função sendo utilizada nas chamadas a <a href="javascript:carrega('fun-fill.php');"><strong>fill(<span class="marca">cor</span>)</strong></a> e <a href="javascript:carrega('fun-stroke.php');"><strong>stroke(<span class="marca">cor</span>)</strong></a> ). Contudo, se a variável cor <strong>int cor = <span class="marca">#469CA2</span></strong> for declarada dentro de <strong>rastro()</strong>, e as funções <a href="javascript:carrega('fun-fill.php');"><strong>fill(<span class="marca">cor</span>)</strong></a> e <a href="javascript:carrega('fun-stroke.php');"><strong>stroke(<span class="marca">cor</span>)</strong></a> também forem colocadas dentro de <strong>rastro()</strong>, o código funcionará perfeitamente, já que a variável cor está sendo usada em um lugar onde ela faz parte do <span class="marca">escopo</span>. Experimente alterar o lugar das funções e da declaração da variável, para entender como isso funciona:</p>

<div class="diagramahalf firstblock">
<iframe id="View_editor_3"></iframe>
</div>

<div class="diagramahalf">
  <pre class='editor codefull' data-name='editor_3' id='editor_3' data-linguagem="java" data-acetheme="tomorrow">
int cor = #36787e;

void draw() {
  fill(cor);
  stroke(cor);
  rastro();
}

void rastro() {
  ellipse(mouseX, mouseY, 15, 15);
}</pre>
</div>

<p></p>
<h3><span class="marca">Case sensitive</span></h3>
<p>Toda linguagem de programação que compartilha da sintaxe de Java faz diferenciação entre letras maísculas e letras minúsculas no código. Uma variável ou função declarada com todas as letras maísculas, ou com apenas a primeira letra maíscula, é diferente de outra com todas as letras minúsculas, ainda que as letras em si sejam as mesmas. Um dos erros mais comuns em códigos <span class="marca">case sensitive</span> são a digitação de variáveis e funções de formas diferentes quanto à maísculas e minúsculas. No exemplo abaixo declaramos duas variáveis com a mesma palavra, mas escritas de formas diferentes em relação às maísculas e minúsculas. Repare que a máquina computacional às interpreta como coisas completamente diferentes. Experimente trocar as variáveis utilizadas em <a href="javascript:carrega('fun-fill.php');"><strong>fill()</strong></a> e <a href="javascript:carrega('fun-stroke.php');"><strong>stroke()</strong></a> para notar a diferença.</p>

<div class="diagramahalf firstblock">
<iframe id="View_editor_4"></iframe>
</div>

<div class="diagramahalf">
  <pre class='editor codefull' data-name='editor_4' id='editor_4' data-linguagem="java" data-acetheme="tomorrow">
int cor = #78008A;
int Cor = #36787e;

void draw() {
  fill(Cor);
  stroke(cor);
  ellipse(mouseX, mouseY, 15, 15);
}</pre>
</div>

<p></p>
<h3><span class="marca">Comentários</span></h3>
<p>Toda linguagem de programação possui uma forma de incluir textos livres dentro do código, geralmente para explicações, anotações, comentários, ou meramente para documentar o que é aquele código. Os <span class="marca">Comentários</span> são ignorados pela máquina computacional, mas permanecem ali para o programador, ou para outros programadores que venham a ter contato com o código. É necessário usar uma sintaxe específica para que a máquina computacional entenda que o trecho deve ser ignorado. Há duas formas de se fazer isso, através de <span class="marca">comentários por linha</span>, e <span class="marca">comentários multilinha</span>. No primeiro caso, deve-se utilizar <strong>//</strong> no início do comentário; tudo que vier depois, naquela linha, será ignorado. No segundo caso, deve-se utilizar <strong>/*</strong> no início daquilo que é um comentário, e <strong>*/</strong> para determinar o que é o final do comentário.</p>

<p>Experimente modificar a posição das marcações ou fazer comentários no código abaixo:</p> 

<div class="diagramahalf firstblock">
<iframe id="View_editor_5"></iframe>
</div>

<div class="diagramahalf">
  <pre class='editor codefull' data-name='editor_5' id='editor_5' data-linguagem="java" data-acetheme="tomorrow">
void draw() {

  fill(#36787e); // cor azul

  /*
  fill(#78008A);
  */
 
  // a borda está azul
  stroke(#36787e);

  // background(#eeeeee);

  /* este trecho desenha
  os círculos.
  */
  ellipse(mouseX, mouseY, 15, 15);
}</pre>
</div>

<p>Um código bem documentado, com comentários explicando cada decisão do programador, o funcionamento das funções, o esquema lógico do seu processamento, etc., é essencial para um bom desenvolvimento. O funcionamento de um código pode parecer óbvio quando se está trabalhando nele, mas podo ficar indecifrável após alguns meses sem vê-lo; por isso, é essencial que ele seja devidamente explicado nos comentários.</p>

<h3><span class="marca">Console</span></h3>
<p>Para saber o que está acontecendo no seu código, entender o valor de alguma variável, ou acompanhar sua mudança, geralmente é necessário visualizar algum tipo de dado. Para fazer isso utilizamos o <span class="marca">Console</span>, um painel de texto disponível na IDE do <span class="marca">Processing</span> onde mensagens enviadas pelo código podem ser exibidas enquanto o programa é executado.</p>

<p>Para exibir mensagens no <span class="marca">Console</span> usamos as funções <a href="javascript:carrega('fun-print.php');"><strong>print(<span class="marca">mensagem</span>)</strong></a> e <a href="javascript:carrega('fun-println.php');"><strong>println(<span class="marca">mensagem</span>)</strong></a>. Esta <span class="marca">mensagem</span> pode ser composta com o valor de variávies, textos, ou qualquer informação que o desenvolvedor julgar necessária visualizar. Enquanto <a href="javascript:carrega('fun-print.php');"><strong>print()</strong></a> exibe uma mensagem e mantem o cursor ao final desta mensagem, <a href="javascript:carrega('fun-println.php');"><strong>println()</strong></a> exibe a mensagem e pula a linha automaticamente.</p>

</div>
</body>
</html>

    