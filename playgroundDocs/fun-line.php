<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name = "pinterest" content = "nopin" />
    <meta name="pinterest" content="nohover">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>line (Processing) | ReferenceDocs</title>
    <meta name="generator" content="ReferenceDocs" />
    <meta name="description" content="Guia de referencia de programação em Processing">
    <meta name="author" content="Prof. Dr. Guilherme Ranoya">
    <meta name="keywords" content="programação criativa, arte generativa, design generativo, design paramétrico, código criativo, processing">
    <meta property="og:url" content="<?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; echo $actual_link; ?>">
    <meta property="og:title" content="line (Processing) | ReferenceDocs">
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
  <h1>line()</h1>

  <p>A função <strong>line()</strong> desenha uma linha de um ponto inicial à um ponto final. A configuração desta linha é realizada por funções assessórias, como <a href="javascript:carrega('fun-stroke.php');"><strong>stroke()</strong></a> e <a href="javascript:carrega('fun-strokeWeight.php');"><strong>strokeWeight()</strong></a></p>

  <h3><span class="marca">Uso</span></h3>


<div class="diagramahalf firstblock">
<iframe id="View_editor_1"></iframe>
</div>

<div class="diagramahalf">
<pre class='editor codefull' data-name='editor_1' id='editor_1' data-linguagem="java" data-acetheme="tomorrow">
void draw() {

  line(10,50,100,150);
  
}</pre>
</div>

  <h3><span class="marca">Sintaxe</span></h3>

  <p><strong>line(<span class="marca">x1</span>,<span class="marca">y1</span><span class="optionalattr">,z1</span>,<span class="marca">x2</span>,<span class="marca">y2</span><span class="optionalattr">,z2</span>);</strong></p>

  <h3><span class="marca">Entradas</span></h3>

  <table>
    <tr>
      <th>variável</th>
      <th>tipo</th>
      <th>descrição</th>
    </tr>
    <tr>
      <td><span class="marca">x1</span></td><td>float</td><td>coordenada horizontal do ponto inicial</td>
    </tr>
    <tr>
      <td><span class="marca">y1</span></td><td>float</td><td>coordenada vertical do ponto inicial</td>
    </tr>
    <tr>
      <td><span class="marca">z1</span></td><td>float</td><td>coordenada ortogonal ao plano cartesiano (altura) do ponto inicial</td>
    </tr>
    <tr>
      <td><span class="marca">x2</span></td><td>float</td><td>coordenada horizontal do ponto final</td>
    </tr>
    <tr>
      <td><span class="marca">y2</span></td><td>float</td><td>coordenada vertical do ponto final</td>
    </tr>
    <tr>
      <td><span class="marca">z2</span></td><td>float</td><td>coordenada ortogonal ao plano cartesiano (altura) do ponto final</td>
    </tr>
  </table>

  <h3><span class="marca">Retorno</span></h3>

  <p><strong>line()</strong> é uma função do tipo <span class="marca">void</span>, e portanto não retorna nenhum valor.</p>

  <h3><span class="marca">Observações</span></h3>

  <p>Os valores <span class="marca">z1</span> e <span class="marca">z2</span> não precisam ser especificados. Ao encontrar apenas 4 valores de entrada, a função <strong>line()</strong> opera sobre o plano bidimensional.</p>

  <h3><span class="marca">Funções associadas</span></h3>

  <table>
    <tr>
      <th>função</th>
      <th>relação</th>
    </tr>
    <tr>
      <td><a href="javascript:carrega('fun-stroke.php');"><strong>stroke()</strong></a></td><td>Define a cor da borda</td>
    </tr>
    <tr>
      <td><a href="javascript:carrega('fun-strokeWeight.php');"><strong>strokeWeight()</strong></a></td><td>Define a espessura da borda</td>
    </tr>
    <tr>
      <td><a href="javascript:carrega('fun-strokeCap.php');"><strong>strokeCap()</strong></a></td><td>Define como são resolvidos graficamente os limites iniciais e finais da linha</td>
    </tr>
  </table>


</div>
</body>
</html>

    