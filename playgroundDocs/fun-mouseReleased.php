<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name = "pinterest" content = "nopin" />
    <meta name="pinterest" content="nohover">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>mouseReleased (Processing) | ReferenceDocs</title>
    <meta name="generator" content="ReferenceDocs" />
    <meta name="description" content="Guia de referencia de programação em Processing">
    <meta name="author" content="Prof. Dr. Guilherme Ranoya">
    <meta name="keywords" content="programação criativa, arte generativa, design generativo, design paramétrico, código criativo, processing">
    <meta property="og:url" content="<?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; echo $actual_link; ?>">
    <meta property="og:title" content="mouseReleased (Processing) | ReferenceDocs">
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
  <h1>mouseReleased()</h1>

  <p>A função <strong>mouseReleased()</strong> é uma função invocada pelo contexto do <strong>Processing</strong> quando um evento específico ocorre: o botão esquerdo do mouse é liberado após ser clicado. Os procedimentos que estiverem estabelecidos dentro desta função serão executados assim que o evento for detectado.</p>

  <p>O click do mouse é dividido em 2 partes: um primeiro momento onde o botão é pressionado, cujos procedimentos são definidos em <a href="javascript:carrega('fun-mousePressed.php');"><strong>mousePressed()</strong></a>, um segundo momento onde o botão é liberado após o click. Se o tempo entre o pressionar e o liberar for muito rápido e a posição do mouse não se alterar, é invocada a função <a href="javascript:carrega('fun-mouseClicked.php');"><strong>mouseClicked()</strong></a>; se o tempo entre o pressionar e o liberar for mais longo, ou houver uma mudança de posição, a função <a href="javascript:carrega('fun-mouseDragged.php');"><strong>mouseDragged()</strong></a> é invocada, e posteriormente a função <strong>mouseReleased()</strong> quando o botão do mouse for liberado.</p>

  <p>Na ausência de <strong>mouseReleased()</strong>, a função <a href="javascript:carrega('fun-mouseClicked.php');"><strong>mouseClicked()</strong></a> será chamada, caso não haja alteração na posição do mouse.</p>

  <h3><span class="marca">Uso</span></h3>


<div class="diagramahalf firstblock">
<iframe id="View_editor_1"></iframe>
</div>

<div class="diagramahalf">
<pre class='editor codefull' data-name='editor_1' id='editor_1' data-linguagem="java" data-acetheme="tomorrow">
void draw() {

}

void mousePressed() {

  background(#d000f2); // roxo
  
}

void mouseClicked() {

  background(#eeeeee); // cinza

}

void mouseReleased() {

  background(#469CA2); // ciano

}

void mouseDragged() {

  background(#F49A49); // amarelo

}</pre>
</div>


  <h3><span class="marca">Entradas</span></h3>

  <p><strong>mouseReleased()</strong> não recebe nenhuma variável ou valor de entrada.</p>

  <h3><span class="marca">Retorno</span></h3>

  <p><strong>mouseReleased()</strong> é uma função do tipo <span class="marca">void</span>, e portanto não retorna nenhum valor.</p>

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

    