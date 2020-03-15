<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name = "pinterest" content = "nopin" />
    <meta name="pinterest" content="nohover">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Variáveis (Processing) | ReferenceDocs</title>
    <meta name="generator" content="ReferenceDocs" />
    <meta name="description" content="Guia de referencia de programação em Processing">
    <meta name="author" content="Prof. Dr. Guilherme Ranoya">
    <meta name="keywords" content="programação criativa, arte generativa, design generativo, design paramétrico, código criativo, processing">
    <meta property="og:url" content="<?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; echo $actual_link; ?>">
    <meta property="og:title" content="Variáveis (Processing) | ReferenceDocs">
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

  Predata_editor_1 = "<styl" + "e>body, html { margin: 0; padding: 0; }</sty" + "le>" + "<canvas id='pjs' " + "style='outline: none;'>" + " </canvas><scri"+ "pt src='https://www.ranoya.com/public/dev/processing.min.js'></sc" + "ript><scrip" + "t type='application/processing' data-processing-target='pjs'>" + "size(320,200); background(#ffffff);";
 
 /*
  Predata_editor_2 = "<style>body{ font-family: courrier, monospace; color: #ac2ac6; } span { color: #cccccc; }</style><scr" + "ipt>ln = 1; function println(d) { document.write('<span>' + ln + ': </span>' + d + '<br>'); ln++; }";
  */
 
  Predata_editor_2 = Predata_editor_1;
  Predata_editor_3 = Predata_editor_1;



  Postdata_editor_1 = "fill(#cccccc); textSize(18); text('1:', 15, 20); text('2:', 15, 40); text('3:', 15, 60); text('4:', 15, 80); text('5:', 15, 100); text('6:', 15, 120); text('7:', 15, 140); text('8:', 15, 160); text('9:', 15, 180); fill(#ac2ac6); text('a = ' + a, 40,20); text('b = ' + b, 40,40); text('y = ' + y, 40,60); text('r = ' + r, 40,80); text('c = ' + c, 40, 100); text('g = ' + g, 40, 120); text('s = ' + s, 40, 140); text('p = ' + p, 40, 160); text('n = ' + n, 40, 180);" + "</scr" + "ipt>";

  Postdata_editor_2 = Postdata_editor_1;
  Postdata_editor_3 = Postdata_editor_1;
 
  </script>

  <div id="texto">
  <h3><span class="marca">Variáveis no Processing</span></h3>

  <p>Variáveis são a forma como guardamos dados temporariamente nas linguagens de programação. Os dados de uma variável ficam na memória pelo tempo que um programa estiver sendo executado; para que estes dados estejam disponíveis de forma permanente, é necessário outro recurso, como escrever um arquivo contendo estes dados, ou enviando os dados para armazenamento em um banco de dados.</p>

  <p>Toda variável ocupa espaço na memória RAM do computador onde o programa está sendo executado. Linguagens de programação que tentam ser mais simples e fáceis de programar reservam largas porções de memória para que o programador não tenha problemas relacionados a isto, mas acabam sendo mais lentas; linguagens que tentam ser mais eficientes e rápidas precisam ter maior precisão naquilo que reservam da memória, e consequentemente, exigem um pouco mais do programador.</p>

  <p></p>
  <h3><span class="marca">Variáveis tipadas e não tipadas</span></h3>
  <p>Liguagens mais simples e fáceis, ao reservar grandes porções de memória, permitem que o programador guarde qualquer tipo de dado em qualquer variável. <span class="marca">Javascript</span>, por exemplo, é uma linguagem onde isto acontece: não é necessário definir o tipo de dado que uma variável pode guardar, e mesmo depois de armazenar nela um valor, pode-se colocar outro tipo imediatamente. As instruções <strong>x = 3.5; x = "palavra";</strong>, nesta sequência, não causam nenhum tipo de erro em <span class="marca">Javascript</span>; chamamos este tipo de linguagem de <span class="marca">linguagem não-tipada</span>.</p>

  <p>Já o <span class="marca">Java</span>, e todas as linguagens derivadas dele, como o <span class="marca">Processing</span>, são <span class="marca">linguagens tipadas</span>, onde é necessário definir os tipos de dados (e suas dimensões), que serão armazenados na memória. Isto é feito no ato de criação da variável, que chamamos de <span class="marca">declaração</span>. Ao <span class="marca">declarar</span> uma variável, é necessário informar o seu tipo, para que o devido espaço de memória seja reservado. Não é obrigatório que esta variável seja <span class="marca">inicializada</span>, isto é, que algum valor seja atribuído a ela inicialmente, mas é bastante comum que tanto a <span class="marca">declaração</span>, quanto a <span class="marca">inicialização</span> sejam feitas juntas, em uma única instrução. Isto é feito com uma instrução do tipo <strong>int x = <span class="marca">10</span>;</strong>, que poderia ser dividida em duas instruções separadas, sendo a primeira <strong>int x;</strong>, e a segunda <strong>x = <span class="marca">10</span>;</strong>.</p>

  <p>Em uma linguagem <span class="marca">tipada</span>, ao se atribuir um dado incompatível com o tipo da variável, produzimos um erro, e o programa é suspenso. Isto pode parecer como algo ruim para o programador de primeira viagem, mas é, na verdade, algo essencial para sabermos que há um problema (bug) no código que foi desenvolvido. As <span class="marca">linguagens não-tipadas</span> mascaram problemas com os dados e são bem mais trabalhosas para que se possa identificá-los e resolvê-los.</p>

  <p>No exemplo abaixo, declaramos e inicializamos algumas variáveis em <span class="marca">Processing</span>:</p> 


<div class="diagramahalf">
<pre class='editor codefull' data-name='editor_1' id='editor_1' data-linguagem="java" data-acetheme="tomorrow">
int a = 10;
int b = 5;
float y = 3.5;
float r = random(50);
boolean c = false;
boolean g = true;
String s = "palavra";
String p = "junta";
String n = "3";</pre>
</div>

<div class="diagramahalf secondsmallblock" style="height: 200px;">
<iframe id="View_editor_1" style="height: 200px;"></iframe>
</div>

<p>Os tipos de dados <span class="marca">declarados</span> são: <strong>int</strong>, que define dados numéricos inteiros (sem casas decimais), positivos ou negativos; <strong>float</strong>, que define dados numéricos com casas decimais, positivos ou negativos; <strong>boolean</strong>, que define dados binários do tipo <span class="marca">true</span> ou <span class="marca">false</span>, e <strong>String</strong>, que define dados formados por sequências de caracteres, ou em termos coloquiais, texto. Uma atenção especial para a última linha do código onde a variável <strong>n</strong> é <span class="marca">declarada</span>: <strong>n</strong> não comporta números, mas sim textos; o valor <span class="marca">3</span> contido em <strong>n</strong> não é um número, mas literalmente o caractere "3". Há outros tipos além destes, como <strong>char</strong>, <strong>color</strong>, <strong>long</strong> ou <strong>byte</strong>, menos usuáis. É possível também criar objetos que funcionam como novos tipos de dados.</p>

<p>No exemplo abaixo, manipulamos e alteramos os dados declarados anteriormente. Respeitando a tipologia da variável e o que pode ser contido nela, é possível fazer todo o tipo de cálculo e operação com os dados, isto é: atribuir novos valores; atribuir valores à partir de cálculo com outras variáveis ou valores; somar, subtrair, igualar, concatenar, etc. Novamente, é necessária a atenção ao que ocorre nas operações envolvendo a variável <strong>n</strong>, e como a ordem das operações altera os resultados.</p>

<p>Experimente modificar a ordem das instruções, os valores originais do exemplo anterior (incluído no código), ou as operações realizadas sobre cada variávei no exemplo abaixo:</p>

<div class="diagramahalf">
<pre class='editor codefull' data-name='editor_2' id='editor_2' data-linguagem="java" data-acetheme="tomorrow">int a = 10;
int b = 5;
float y = 3.5;
float r = random(50);
boolean c = false;
boolean g = true;
String s = "palavra";
String p = "junta";
String n = "3";

a++;
b = b + 2;
y = y - 10;
r = (b + y) + (a - 20);
c = g;
s = s + p;
p = n;
n = n + 1;</pre>
</div>

<div class="diagramahalf secondsmallblock" style="height: 200px;">
<iframe id="View_editor_2" style="height: 200px;"></iframe>
</div>

<p>Por fim, algumas questões mais complexas envolvendo variáveis: a operação <strong>/</strong> é uma divisão; toda divisão pode resultar em frações, e consequentemente onde houver divisão, o resultado precisa ser contido em uma variável do tipo <strong>float</strong>, como <span class="marca">y</span>.</p>

<p>A função <strong>int(<span class="marca">p</span>)</strong> transforma um <strong>float</strong> ou uma <strong>String</strong> (desde que contenha caracteres numéricos) em um <strong>int</strong>. Essa função é chamada assim na versão web do <span class="marca">Processing</span> usada aqui; a versão desktop a chama através de <strong>Integer.parseInt(<span class="marca">p</span>)</strong>. Existem pequenas diferenças entre as versões, mas que interferem muito pouco na programação; tratam-se apenas de nomenclaturas, já que a lógica opera da mesma forma.</p>

<p>As variáveis <strong>c</strong> e <strong>g</strong> são do tipo <strong>boolean</strong>, e portanto, guardam dados binários. Estes dados são normalmente representados por <span class="marca">true</span> ou <span class="marca">false</span>, mas em sua essência, dados binários são, na verdade, <span class="marca">0</span> e <span class="marca">1</span>. Desta forma, é possível somar dados binários como se fossem dados numéricos.</p>

<p>Experimente alterar os dados e as operações no exemplo abaixo para ver os resultados:</p>

<div class="diagramahalf">
  <pre class='editor codefull' data-name='editor_3' id='editor_3' data-linguagem="java" data-acetheme="tomorrow">int a = 10;
int b = 5;
float y = 3.5;
float r = random(50);
boolean c = false;
boolean g = true;
String s = "palavra";
String p = "junta";
String n = "3";

a++;
b = b + 2;
y = y - 10;
r = (b + y) + (a - 20);
c = g;
s = s + p;
p = n;
n = n + 1;

y = a / 2;
a = int(p) + 1;
c = false;
r = c + a;
b = g + a;</pre>
</div>

<div class="diagramahalf secondsmallblock" style="height: 200px;">
<iframe id="View_editor_3" style="height: 200px;"></iframe>
</div>

<p>A forma como representamos as variáveis ou as operações feitas sobre elas nas diversas linguagens de programação podem variar muito, mas a lógica de como elas funcionam, como os dados são processados, e como os armazenam, é invariável. Ao entender como lidar com variáveis em uma linguagem, entendemos como todas as linguagens de programação procedem, ainda que a sintaxe varie.</p>


</div>
</body>
</html>

    