<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name = "pinterest" content = "nopin" />
    <meta name="pinterest" content="nohover">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>ellipse (Processing) | ReferenceDocs</title>
    <meta name="generator" content="ReferenceDocs" />
    <meta name="description" content="Guia de referencia de programação em Processing">
    <meta name="author" content="Prof. Dr. Guilherme Ranoya">
    <meta name="keywords" content="programação criativa, arte generativa, design generativo, design paramétrico, código criativo, processing">
    <meta property="og:url" content="<?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; echo $actual_link; ?>">
    <meta property="og:title" content="ellipse (Processing) | ReferenceDocs">
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
  <h1>ellipse()</h1>

  <p>A função <strong>ellipse()</strong> desenha uma circunferência ou uma elipse em uma coordenada dada como ponto de referência, e com um tamanho especificado. A configuração do ponto de referência é dada pela função <a href="javascript:carrega('fun-ellipseMode.php');"><strong>ellipseMode()</strong></a>, espessura e cor da borda pelas funções <a href="javascript:carrega('fun-stroke.php');"><strong>stroke()</strong></a> e <a href="javascript:carrega('fun-strokeWeight.php');"><strong>strokeWeight()</strong></a>, e a cor de preenchimento pela função <a href="javascript:carrega('fun-fill.php');"><strong>fill()</strong></a>.</p>

  <h3><span class="marca">Uso</span></h3>


<div class="diagramahalf firstblock">
<iframe id="View_editor_1"></iframe>
</div>

<div class="diagramahalf">
<pre class='editor codefull' data-name='editor_1' id='editor_1' data-linguagem="java" data-acetheme="tomorrow">
void draw() {

  ellipseMode(CORNER);
  ellipse(20,20,80,120);
  
}</pre>
</div>

  <h3><span class="marca">Sintaxe</span></h3>

  <p><strong>ellipse(<span class="marca">x</span>,<span class="marca">y</span>,<span class="marca">w</span>,<span class="marca">h</span>);</strong></p>

  <h3><span class="marca">Entradas</span></h3>

  <table>
    <tr>
      <th>variável</th>
      <th>tipo</th>
      <th>descrição</th>
    </tr>
    <tr>
      <td><span class="marca">x</span></td><td>float</td><td>coordenada horizontal do ponto de referência</td>
    </tr>
    <tr>
      <td><span class="marca">y</span></td><td>float</td><td>coordenada vertical do ponto de referência</td>
    </tr>
    <tr>
      <td><span class="marca">w</span></td><td>float</td><td>largura (dimensão horizontal) da circunferência</td>
    </tr>
    <tr>
      <td><span class="marca">h</span></td><td>float</td><td>altura (dimensão vertical) da circunferência</td>
    </tr>
  </table>

  <h3><span class="marca">Retorno</span></h3>

  <p><strong>ellipse()</strong> é uma função do tipo <span class="marca">void</span>, e portanto não retorna nenhum valor.</p>

  <h3><span class="marca">Observações</span></h3>

  <p>Por <i>default</i> o ponto de referência da elipse/circunferência é seu canto superior esquerdo. Através de <a href="javascript:carrega('fun-ellipseMode.php');"><strong>ellipseMode()</strong></a> é possível definir como ponto de referência o centro da elipse, ou é possível definir os parâmetros <span class="marca">w</span> e <span class="marca">h</span> como coordenadas finais da elipse, e não suas dimensões.</p>

  <h3><span class="marca">Funções associadas</span></h3>

  <table>
    <tr>
      <th>função</th>
      <th>relação</th>
    </tr>
    <tr>
      <td><a href="javascript:carrega('fun-ellipseMode.php');"><strong>ellipseMode()</strong></a></td><td>Define como serão interpretados os dados de entrada</td>
    </tr>
    <tr>
      <td><a href="javascript:carrega('fun-stroke.php');"><strong>stroke()</strong></a></td><td>Define a cor da borda</td>
    </tr>
    <tr>
      <td><a href="javascript:carrega('fun-strokeWeight.php');"><strong>strokeWeight()</strong></a></td><td>Define a espessura da borda</td>
    </tr>
    <tr>
      <td><a href="javascript:carrega('fun-fill.php');"><strong>fill()</strong></a></td><td>Define a cor de preenchimento</td>
    </tr>
  </table>

</div>
</body>
</html>

    