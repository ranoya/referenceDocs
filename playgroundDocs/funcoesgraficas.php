<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name = "pinterest" content = "nopin" />
    <meta name="pinterest" content="nohover">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Funções Gráficas (Processing) | ReferenceDocs</title>
    <meta name="generator" content="ReferenceDocs" />
    <meta name="description" content="Guia de referencia de programação em Processing">
    <meta name="author" content="Prof. Dr. Guilherme Ranoya">
    <meta name="keywords" content="programação criativa, arte generativa, design generativo, design paramétrico, código criativo, processing">
    <meta property="og:url" content="<?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; echo $actual_link; ?>">
    <meta property="og:title" content="Funções Gráficas (Processing) | ReferenceDocs">
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

  Predata_editor_1 = "<styl" + "e>body, html { margin: 0; padding: 0; }</sty" + "le>" + "<canvas id='pjs' " + "style='outline: none;'>" + " </canvas><scri"+ "pt src='https://www.ranoya.com/public/dev/processing.min.js'></sc" + "ript><scrip" + "t type='application/processing' data-processing-target='pjs'>" + "void setup() { size(150,150); background(#eeeeee); frameRate(20); stroke(#78008A); strokeWeight(2); fill(#78008A); }";
 
 /*
  Predata_editor_2 = "<style>body{ font-family: courrier, monospace; color: #ac2ac6; } span { color: #cccccc; }</style><scr" + "ipt>ln = 1; function println(d) { document.write('<span>' + ln + ': </span>' + d + '<br>'); ln++; }";
  */
 
  Predata_editor_2 = Predata_editor_1;
  Predata_editor_3 = Predata_editor_1;
  Predata_editor_4 = Predata_editor_1;
  Predata_editor_5 = Predata_editor_1;
  Predata_editor_6 = Predata_editor_1 + "function au" + "xOn() { stroke(#cccc" + "cc); strokeWeight(1); line(20,20,140,10); line(20" + ",40,140,110); strokeWeight(4); point(140" + ",10); point(140,110); noStroke(); }";
  Predata_editor_7 = Predata_editor_1;
  Predata_editor_8 = Predata_editor_1;
  Predata_editor_9 = Predata_editor_1;
  Predata_editor_10 = Predata_editor_1;



  Postdata_editor_1 = "</scr" + "ipt>";

  Postdata_editor_2 = Postdata_editor_1;
  Postdata_editor_3 = Postdata_editor_1;
  Postdata_editor_4 = Postdata_editor_1;
  Postdata_editor_5 = Postdata_editor_1;
  Postdata_editor_6 = Postdata_editor_1;
  Postdata_editor_7 = Postdata_editor_1;
  Postdata_editor_8 = Postdata_editor_1;
  Postdata_editor_9 = Postdata_editor_1;
  Postdata_editor_10 = Postdata_editor_1;
 
  </script>

  <div id="texto">
  <h1>Instruções Gráficas</h1>

  <p><span class="marca">Processing</span> é uma plataforma criada para produzir mídia visual e interativa, portanto, instruções para gerar resultados gráficos são uma parte importante de seu lexo de programação. Apresentaremos aqui um conjunto de instruções mínimas para construção de formas e de expressão gráfica/visual com a linguagem:</p> 

<h3><span class="marca">Fundo</span></h3>

  <p>A função <a href="javascript:carrega('fun-background.php');"><strong>background()</strong></a> é responsável por apagar o sketch e estabelecer uma cor de fundo. Ela recebe um dado de cor para fazer isso, que pode ser recebido em qualquer um dos formatos de cor que o <span class="marca">Processing</span> reconhece.</p>

<div class="diagramahalf firstblock">
<iframe id="View_editor_1"></iframe>
</div>

<div class="diagramahalf">
  <pre class='editor codefull' data-name='editor_1' id='editor_1' data-linguagem="java" data-acetheme="tomorrow">
void draw() {

  background(#78008A);

}</pre>
</div>



  <h3><span class="marca">Linhas</span></h3>

  <p>A função <a href="javascript:carrega('fun-line.php');"><strong>line()</strong></a> é responsável pelo desenho de linhas simples no sketch. Ela recebe 4 valores com coordenadas <span class="marca">x</span> e <span class="marca">y</span> iniciais da linha, e <span class="marca">x</span> e <span class="marca">y</span> finais.</p>

<div class="diagramahalf firstblock">
<iframe id="View_editor_2"></iframe>
</div>

<div class="diagramahalf">
  <pre class='editor codefull' data-name='editor_2' id='editor_2' data-linguagem="java" data-acetheme="tomorrow">
void draw() {

  line(0,0,100,50);

}</pre>
</div>







<h3><span class="marca">Circunferências / Elipses</span></h3>

  <p>A função <a href="javascript:carrega('fun-ellipse.php');"><strong>ellipse()</strong></a> é responsável pelo desenho de círculos e elipses no sketch. Ela recebe 4 valores com coordenadas <span class="marca">x</span> e <span class="marca">y</span> de referência, e <span class="marca">w</span> e <span class="marca">h</span> com as dimensões horizontais e verticais da elipse.</p>

<div class="diagramahalf firstblock">
<iframe id="View_editor_3"></iframe>
</div>

<div class="diagramahalf">
  <pre class='editor codefull' data-name='editor_3' id='editor_3' data-linguagem="java" data-acetheme="tomorrow">
void draw() {

  ellipse(40,40,80,50);

}</pre>
</div>







<h3><span class="marca">Quadrados / Retângulos</span></h3>

  <p>A função <a href="javascript:carrega('fun-rect.php');"><strong>rect()</strong></a> é responsável pelo desenho de quadrados e retângulos no sketch. Ela recebe 4 valores com coordenadas <span class="marca">x</span> e <span class="marca">y</span> de referência, e <span class="marca">w</span> e <span class="marca">h</span> com as dimensões horizontais e verticais do retângulo.</p>

<div class="diagramahalf firstblock">
<iframe id="View_editor_4"></iframe>
</div>

<div class="diagramahalf">
  <pre class='editor codefull' data-name='editor_4' id='editor_4' data-linguagem="java" data-acetheme="tomorrow">
void draw() {

  rect(40,40,80,50);

}</pre>
</div>

<h3><span class="marca">Polígonos e Superfícies</span></h3>
  
  <p>A função <a href="javascript:carrega('fun-beginShape.php');"><strong>beginShape()</strong></a> inicia o desenho de um polígono ou superfície, elaborado através da definições de vertices do polígono dados pela função <a href="javascript:carrega('fun-vertex.php');"><strong>vertex()</strong></a> ou por curvas construídas com as funções <a href="javascript:carrega('fun-curveVertex.php');"><strong>curveVertex()</strong></a> ou <a href="javascript:carrega('fun-bezierVertex.php');"><strong>bezierVertex()</strong></a>. O desenho do polígono ou superfície é finalizado pela função <a href="javascript:carrega('fun-endShape.php');"><strong>endShape()</strong></a>, que pode receber a constante <span class="marca">CLOSE</span> como valor de entrada, forçando o fechamento do polígono/superfície.</p>

<div class="diagramahalf firstblock">
<iframe id="View_editor_5"></iframe>
</div>

<div class="diagramahalf">
  <pre class='editor codefull' data-name='editor_5' id='editor_5' data-linguagem="java" data-acetheme="tomorrow">
void draw() {

  beginShape();
  vertex(20,20);
  curveVertex(70,40);
  vertex(120,100);
  curveVertex(50,120);
  vertex(20,80);
  endShape(CLOSE);

}</pre>
</div>


<p>A função <a href="javascript:carrega('fun-bezierVertex.php');"><strong>bezierVertex()</strong></a> desenha uma curva tensionada por dois pontos de controle. Ela recebe 3 pares de coordenadas: o primeiro par sendo o ponto de tensão relativo ao vertex de origem anterior à função, o segundo é ponto de tensão da curva em relação ao seu término, e o último é a coordenada onde ela termina.</a>

  </p>

<div class="diagramahalf firstblock">
<iframe id="View_editor_6"></iframe>
</div>

<div class="diagramahalf">
  <pre class='editor codefull' data-name='editor_6' id='editor_6' data-linguagem="java" data-acetheme="tomorrow">
void draw() {

  beginShape();
  vertex(20,20);
  bezierVertex(140,10,140,110,20,40);
  endShape(CLOSE);

  auxOn();
}</pre>
</div>

<p>A classe <strong class="marca">PShape</strong> é capaz de criar ou carregar formas (shapes) de um arquivo externo. Ela é bastante útil para carregar arquivos <span class="marca">SVG</span> ou <span class="marca">OBJ</span> (3D) para serem usados no Processing. Estas formas ou arquivos vetoriais externos são criados pela função <a href="javascript:carrega('fun-createShape.php');"><strong>createShape()</strong></a> ou carregados pela função <a href="javascript:carrega('fun-loadShape.php');"><strong>loadShape()</strong></a>, e são desenhados na tela pela função <a href="javascript:carrega('fun-shape.php');"><strong>shape()</strong></a>.
</p>

<div class="diagramahalf firstblock">
<iframe id="View_editor_7"></iframe>
</div>

<div class="diagramahalf">
  <pre class='editor codefull' data-name='editor_7' id='editor_7' data-linguagem="java" data-acetheme="tomorrow">
PShape s;
s = loadShape(&quot;https://www.ranoya.com/Assets/Logotipos/auladgen-purplevazado.svg&quot;);

void draw() {
s.rotate(PI/4);
shape(s, 30, 30, 60, 60);

s.resetMatrix();

}</pre>
</div>

<p>Da mesma forma que <strong class="marca">PShape</strong>, a classe <strong class="marca">PGraphics</strong> é capaz de criar formas (shapes), e é também capaz de criar arquivos (externos) à partir destas formas. Ela é bastante útil para gerar arquivos <span class="marca">PDF</span>, <span class="marca">PNG</span>, <span class="marca">SVG</span> ou <span class="marca">DXF</span>(3D). Estas formas ou arquivos externos são criados pela função <a href="javascript:carrega('fun-createGraphics.php');"><strong>createGraphics()</strong></a> ou desenhados na tela pela função <a href="javascript:carrega('fun-image.php');"><strong>image()</strong></a>.
</p>



<div class="diagramahalf firstblock">
<iframe id="View_editor_8"></iframe>
</div>

<div class="diagramahalf">
  <pre class='editor codefull' data-name='editor_8' id='editor_8' data-linguagem="java" data-acetheme="tomorrow">
PGraphics p;
p = createGraphics(100, 100);

void draw() {
  p.beginDraw();
  p.background(#78008A);
  p.stroke(#eeeeee);
  p.line(p.width*0.5, p.height*0.5, mouseX, mouseY);
  p.endDraw();
  image(p, 40, 30); 
}</pre>
</div>

<p style="clear: both;">
Para criar arquivos externos, como um <span class="marca">PDF</span>, é necessário carregar uma biblioteca para a pasta onde o Processing guarda os arquivos, e utilizar a diretriz <span class="marca">import</span> para informar ao interpretador que ela será usada. 
</p>

<pre class='editor codefull' data-name='editor_9' id='editor_9' data-linguagem="java" data-acetheme="tomorrow">
import processing.pdf.*;

PGraphics pdf = createGraphics(300, 300, PDF, &quot;output.pdf&quot;);
pdf.beginDraw();
pdf.background(128, 0, 0);
pdf.line(50, 50, 250, 250);
pdf.dispose();
pdf.endDraw();</pre>

<p>A criação de arquivos <span class="marca">SVG</span> funciona da mesma maneira:</p>

<pre class='editor codefull' data-name='editor_10' id='editor_10' data-linguagem="java" data-acetheme="tomorrow">
import processing.svg.*;

PGraphics svg = createGraphics(300, 300, SVG, &quot;output.svg&quot;);
svg.beginDraw();
svg.background(128, 0, 0);
svg.line(50, 50, 250, 250);
svg.dispose();
svg.endDraw();</pre>


















<h6 style="clear:both;">ATENÇÃO: Este documento ainda está sendo escrito, descrevendo funções e instruções gráficas importantes para o uso do Processing</h6>
</div>
</body>
</html>

    