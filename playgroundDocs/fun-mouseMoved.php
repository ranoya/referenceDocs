<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name = "pinterest" content = "nopin" />
    <meta name="pinterest" content="nohover">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>mouseMoved (Processing) | ReferenceDocs</title>
    <meta name="generator" content="ReferenceDocs" />
    <meta name="description" content="Guia de referencia de programação em Processing">
    <meta name="author" content="Prof. Dr. Guilherme Ranoya">
    <meta name="keywords" content="programação criativa, arte generativa, design generativo, design paramétrico, código criativo, processing">
    <meta property="og:url" content="<?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; echo $actual_link; ?>">
    <meta property="og:title" content="mouseMoved (Processing) | ReferenceDocs">
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

  Predata_editor_1 = "<styl" + "e>body, html { margin: 0; padding: 0; }</sty" + "le>" + "<canvas id='pjs' " + "style='outline: none;'>" + " </canvas><scri"+ "pt src='https://www.ranoya.com/public/dev/processing.min.js'></sc" + "ript><scrip" + "t type='application/processing' data-processing-target='pjs'>" + "void setup() { size(150,150); background(#eeeeee); frameRate(20); stroke(#78008A); fill(#78008A); strokeWidth(2); }";

  Postdata_editor_1 = "</scri" + "pt>";

 
  </script>

  <div id="texto">
  <h1>mouseMoved()</h1>

  <p>A função <strong>mouseMoved()</strong> é uma função invocada pelo contexto do <strong>Processing</strong> quando o mouse se movimenta em qualquer direção, e o botão não está pressionado.</p>

  <p>Se o botão estiver, ou for pressionado, enquanto o mouse se moviementa, a função invocada será <a href="javascript:carrega('fun-mouseDragged.php');"><strong>mouseDragged()</strong></a>.

  <p>Para se saber o valor da coordenada horizontal (x) da posição do mouse, se utiliza a variável de sistema <span class="marca">mouseX</span>, e para se saber o valor da coordenada vertical (y), se utiliza a variável <span class="marca">mouseY</span>. O <strong>Processing</strong> também fornece duas outras variáveis, <span class="marca">pmouseX</span> e <span class="marca">pmouseY</span>, que fornecem a última posição horizontal e vertical do mouse, antes daquela que ele ocupa agora.</p>

  <h3><span class="marca">Uso</span></h3>


<div class="diagramahalf firstblock">
<iframe id="View_editor_1"></iframe>
</div>

<div class="diagramahalf">
<pre class='editor codefull' data-name='editor_1' id='editor_1' data-linguagem="java" data-acetheme="tomorrow">
int value = 0;

void draw() {
  colorMode(HSB, 320, 100, 255);
  fill(color(270, 100, value));
  stroke(color(270, 100, value));
  rect(10, 10, 130, 130);
}

void mouseMoved() {
  value = value + 5;
  if (value > 255) {
    value = 0;
  }
}</pre>
</div>


  <h3><span class="marca">Entradas</span></h3>

  <p><strong>mouseMoved()</strong> não recebe nenhuma variável ou valor de entrada.</p>

  <h3><span class="marca">Retorno</span></h3>

  <p><strong>mouseMoved()</strong> é uma função do tipo <span class="marca">void</span>, e portanto não retorna nenhum valor.</p>

<h3><span class="marca">Variáveis relacionadas</span></h3>
<table>
<tr><th>variável</th><th>tipo</th><th style="text-align: left;">descrição</th></tr>
<tr><td>mouseX</td><td><span class="marca">int</span></td><td>Valor atual da coordenada horizontal do mouse</td></tr>
<tr><td>mouseY</td><td><span class="marca">int</span></td><td>Valor atual da coordenada vertical do mouse</td></tr>
<tr><td>pmouseX</td><td><span class="marca">int</span></td><td>Valor anterior da coordenada horizontal do mouse</td></tr>
<tr><td>mouseX</td><td><span class="marca">int</span></td><td>Valor anterior da coordenada vertical do mouse</td></tr>
</table>

</div>
</body>
</html>

    