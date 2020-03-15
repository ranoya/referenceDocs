<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name = "pinterest" content = "nopin" />
    <meta name="pinterest" content="nohover">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Loops (Processing) | ReferenceDocs</title>
    <meta name="generator" content="ReferenceDocs" />
    <meta name="description" content="Guia de referencia de programação em Processing">
    <meta name="author" content="Prof. Dr. Guilherme Ranoya">
    <meta name="keywords" content="programação criativa, arte generativa, design generativo, design paramétrico, código criativo, processing">
    <meta property="og:url" content="<?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; echo $actual_link; ?>">
    <meta property="og:title" content="Loops (Processing) | ReferenceDocs">
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

  Predata_editor_2 = "<style>body{ font-family: courrier, monospace; color: #ac2ac6; } span { color: #cccccc; }</style><scr" + "ipt>ln = 1; function println(d) { document.write('<span>' + ln + ': </span>' + d + '<br>'); ln++; }";

  Predata_editor_3 = "<styl" + "e>body, html { margin: 0; padding: 0; }</sty" + "le>" + "<canvas id='pjs' " + "style='outline: none;'>" + " </canvas><scri"+ "pt src='https://www.ranoya.com/public/dev/processing.min.js'></sc" + "ript><scrip" + "t type='application/processing' data-processing-target='pjs'>" + "void setup() { size(150,150); background(#eeeeee); frameRate(20); stroke(#78008A); strokeWeight(2); fill(#78008A); }";

  Predata_editor_4 = Predata_editor_3;

  Postdata_editor_2 = "println('x = ' + x); println('a = ' + a);</scr" + "ipt>";
  Postdata_editor_3 = "</scr" + "ipt>";
  Postdata_editor_4 = Postdata_editor_3;
 
  </script>

  <div id="texto">
  <h1>Loops</h1>

  <p><span class="marca">Loops</span> são a definição de um bloco de instruções que são executadas repetidas vezes dentro de condições pré-estabelecidas. Eles são essenciais para todo tipo de programação porque toda a computação se origina na ideia de ações repetitivas que precisam ser executadas tantas vezes que se torne inviável para um ser humano realizá-las.</p>

  <p>Na grande maioria das linguagens de programação há duas instruções para definir <span class="marca">loops</span>: o <strong>for</strong> e o <strong>while</strong>. Há sutis diferenças entre as duas, e o <strong>for</strong> é geralmente mais usado do que o <strong>while</strong>. Ambas instruções exigem alguns parâmetros para poderem operar, que são, resumidamente, as condições para que o <span class="marca">loop</span> permaneça sendo executado. No caso do <strong>for</strong>, três parâmetros são necessários: uma variável de controle, a condição logica sobre esta variável de controle para que o <span class="marca">loop</span> continue sendo executado, e o que acontece com esta variável ao final de cada execução do <span class="marca">loop</span>; já o <strong>while</strong> recebe apenas um único parâmetro, que é a condição para que o <span class="marca">loop</span> continue sendo executado, sem atribuir uma variável de controle a ele, ou uma modificação sobre ela ao final da execução de cada <span class="marca">iteração</span> dele.</p>

  <p><span class="marca">Loops</span> também podem ser uma instrução perigosa na programação, pois se a condição dada nunca chegar ao fim, o programa pode travar a máquina computacional em uma tarefa infinita. É por conta disso que os <strong>for</strong> são mais utilizados do que os <strong>while</strong>, pois há mais chances de um <strong>for</strong> não constituir um <span class="marca">loop</span> sem fim.</p>

  <p>No exemplo abaixo, ambos os <span class="marca">loops</span> <strong>não</strong> podem ser executados, pois criariam um <span class="marca">loop</span> sem fim. Tente imaginar o que aconteceria com as respectivas variáveis estabelecidas como condições para que estes <span class="marca">loops</span> sejam executados:</p>

<pre class='editor codefull' data-name='editor_1' id='editor_1' data-linguagem="java" data-acetheme="tomorrow">
for (int i=0; i<10; i++) {
  i=0;
}

int k = 0;
int a = 5;

while(k<10) {
  a=k-3;
}</pre>

  <p>Para evitar este tipo de situação, os programadores acabam preferindo utilizar mais o <strong>for</strong> do que o <strong>while</strong> pois este último deixa a condição para execução do <span class="marca">loop</span> mais aberta, ainda que ambas as instruções possam causar <span class="marca">loops</span> infinitos, como visto no exemplo acima. A diferença sutil entre os dois é que <strong>while</strong> permite que se utilize qualquer variável já presente no código como variável de controle na condição para execução dele. Por se tratar de uma condição, ou seja, uma operação lógica condicional, qualquer parâmetro informado como condição (em <strong>for</strong> ou <strong>while</strong>) precisa dar um resultado <strong>boolean</strong> <span class="marca">true</span> para que o <span class="marca">loop</span> continue ativo.</p>

<p><strong>ATENÇÃO: Cuidado ao alterar os códigos neste documento, para que o último parâmetro do <b>for</b> não acabe virando, ao se digitar, algo como <b>i = i;</b> ou <b>x = 0</b>. Isto irá fazer seu navegador travar com um loop infinito.</strong></p>

<p>Experimente mudar a operação no bloco de <span class="marca">loop</span> no exemplo abaixo, ou mesmo as condições, para ver como o resultado se altera:</p>

<div class="diagramahalf">
<pre class='editor codefull' data-name='editor_2' id='editor_2' data-linguagem="java" data-acetheme="tomorrow">
x = 0;
a = 0;

for(x=0; x<10; x++) {
  
  a = a + (x * 2);

}</pre>
</div>

<div class="diagramahalf secondsmallblock">
<iframe id="View_editor_2"></iframe>
</div>

<p>Repare que as variáveis <strong>x</strong> e <strong>a</strong> precisam ser declaradas fora do próprio <span class="marca">loop</span> para que possamos ter acesso aos seus valores, já que tanto a variável de controle, quanto outras variáveis declaradas dentro do bloco ficam restritas ao próprio bloco por causa de seu <span class="marca">escopo</span>. Se você retirar sua declaração das primeiras linhas, elas continuarão existindo e permanecerão funcionando, mas não haverá como acessá-las para saber seus valores no console abaixo do código, pois assim que o <span class="marca">loop</span> se encerra, as variáveis deixam de existir.</p>
<p>Agora, vejamos como este tipo de recurso pode ser aplicado em um contexto gráfico:</p>

<div class="diagramahalf firstblock">
<iframe id="View_editor_3"></iframe>
</div>

<div class="diagramahalf">
  <pre class='editor codefull' data-name='editor_3' id='editor_3' data-linguagem="java" data-acetheme="tomorrow">
void draw() {
  
  for(int x = 0; x <= 150; x = x + 10) {

    line(x,0,x,150);

  }
}</pre>
</div>

<p class="separabloco"></p>

<div class="diagramahalf firstblock">
<iframe id="View_editor_4"></iframe>
</div>

<div class="diagramahalf">
  <pre class='editor codefull' data-name='editor_4' id='editor_4' data-linguagem="java" data-acetheme="tomorrow">
void draw() {
  background(#eeeeee);
  for(int c = 0; c < 5; c++) {

    rect(mouseX,mouseY+(c*15),10,10);

  }
}</pre>
</div>

<p>Qual a utilidade de um <span class="marca">loop</span>, então?<br><span class="marca">Loops</span> são necessários para realizar tarefas repetitivas, geralmente quando há algum parâmetro na tarefa que se altera. Eles são a base da própria computação. Se você verificar que está realizando a mesma instrução (ou um conjunto de instruções) repetidas vezes com alguns parâmetros alterados em seu código, isto é sinal que as instruções deveriam estar dentro de um <span class="marca">loop</span>.</p>


</div>
</body>
</html>

    