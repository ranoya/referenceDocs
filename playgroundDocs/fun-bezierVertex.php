<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name = "pinterest" content = "nopin" />
    <meta name="pinterest" content="nohover">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>bezierVertex (Processing) | ReferenceDocs</title>
    <meta name="generator" content="ReferenceDocs" />
    <meta name="description" content="Guia de referencia de programação em Processing">
    <meta name="author" content="Prof. Dr. Guilherme Ranoya">
    <meta name="keywords" content="programação criativa, arte generativa, design generativo, design paramétrico, código criativo, processing">
    <meta property="og:url" content="<?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; echo $actual_link; ?>">
    <meta property="og:title" content="bezierVertex (Processing) | ReferenceDocs">
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
  <h1>bezierVertex()</h1>

  <p>A função <strong>bezierVertex()</strong> desenha uma curva à partir de um <a href="javascript:carrega('fun-vertex.php');"><strong>vertex()</strong></a> anteriormente dado. Por se tratar de uma curva do tipo Bezier, ela é traçada pela tensão de seus pontos inicial e final através de dois vetores dados. A função <strong>bezierVertex()</strong> precisa ser utilizada entre as funções <a href="javascript:carrega('fun-beginShape.php');"><strong>beginShape()</strong></a> e <a href="javascript:carrega('fun-endShape.php');"><strong>endShape()</strong></a>, que especificam o desenho de um polígono ou forma. A configuração deste polígono ou superfície é realizada por funções assessórias, como <a href="javascript:carrega('fun-stroke.php');"><strong>stroke()</strong></a>, <a href="javascript:carrega('fun-strokeWeight.php');"><strong>strokeWeight()</strong></a> ou <a href="javascript:carrega('fun-fill.php');"><strong>fill()</strong></a></p>

  <h3><span class="marca">Uso</span></h3>


<div class="diagramahalf firstblock">
<iframe id="View_editor_1"></iframe>
</div>

<div class="diagramahalf">
<pre class='editor codefull' data-name='editor_1' id='editor_1' data-linguagem="java" data-acetheme="tomorrow">
void draw() {

  beginShape();
  vertex(20,20);
  bezierVertex(140,10,140,110,20,40);
  endShape(CLOSE);

  stroke(#cccccc);
  strokeWeight(1);
  line(20,20,140,10);
  line(20,40,140,110);
  strokeWeight(4);
  point(140,10);
  point(140,110);
  noStroke();

}</pre>
</div>

  <h3><span class="marca">Sintaxe</span></h3>

  <p><strong>bezieVertex(<span class="marca">tX1</span>,<span class="marca">tY1</span><span class="optionalattr">,tZ1</span>,<span class="marca">tX2</span>,<span class="marca">tY2</span><span class="optionalattr">,tZ2</span>,<span class="marca">x</span></strong>,<span class="marca">y</span><span class="optionalattr">,z</span>);</p>

  <h3><span class="marca">Entradas</span></h3>

  <table>
    <tr>
      <th>variável</th>
      <th>tipo</th>
      <th>descrição</th>
    </tr>

    <tr>
      <td><span class="marca">tX1</span></td>
      <td>float</td>
      </td>
      <td>coordenada no eixo horizontal do ponto que tensiona o início da curva em relação a um <a href="javascript:carrega('fun-vertex.php');"><strong>vertex()</strong></a> anteriormente dado
      </td>
    </tr>

    <tr>
      <td><span class="marca">tY1</span></td>
      <td>float</td>
      </td>
      <td>coordenada no eixo vertical do ponto que tensiona o início da curva em relação a um <a href="javascript:carrega('fun-vertex.php');"><strong>vertex()</strong></a> anteriormente dado
      </td>
    </tr>

    <tr>
      <td><span class="marca">tZ1</span></td>
      <td>float</td>
      </td>
      <td>coordenada no eixo normal (altura) do ponto que tensiona o início da curva em relação a um <a href="javascript:carrega('fun-vertex.php');"><strong>vertex()</strong></a> anteriormente dado
      </td>
    </tr>

    <tr>
      <td><span class="marca">tX2</span></td>
      <td>float</td>
      </td>
      <td>coordenada no eixo horizontal do ponto que tensiona o final da curva em relação a <span class="marca">x</span>
      </td>
    </tr>

    <tr>
      <td><span class="marca">tY2</span></td>
      <td>float</td>
      </td>
      <td>coordenada no eixo vertical do ponto que tensiona o final da curva em relação a <span class="marca">y</span>
      </td>
    </tr>

    <tr>
      <td><span class="marca">tZ2</span></td>
      <td>float</td>
      </td>
      <td>coordenada no eixo normal (altura) do ponto que tensiona o final da curva em relação a <span class="marca">z</span>
      </td>
    </tr>

    <tr>
      <td><span class="marca">x</span></td>
      <td>float</td>
      </td>
      <td>coordenada no eixo horizontal do ponto de término da curva
      </td>
    </tr>

    <tr>
      <td><span class="marca">y</span></td>
      <td>float</td>
      </td>
      <td>coordenada no eixo vertical do ponto de término da curva
      </td>
    </tr>

    <tr>
      <td><span class="marca">z</span></td>
      <td>float</td>
      </td>
      <td>coordenada no eixo normal (altura) do ponto de término da curva
      </td>
    </tr>
    
  </table>

  <h3><span class="marca">Retorno</span></h3>

  <p><strong>bezierVertex()</strong> é uma função do tipo <span class="marca">void</span>, e portanto não retorna nenhum valor.</p>

  <h3><span class="marca">Funções associadas</span></h3>

  <table>
    <tr>
      <th>função</th>
      <th>relação</th>
    </tr>
    <tr>
      <td><a href="javascript:carrega('fun-beginShape.php');"><strong>beginShape()</strong></a></td><td>Inicializa a especificação de um polígono ou superfície terminado com <a href="javascript:carrega('fun-endShape.php');"><strong>endShape()</strong></a></td>
    </tr>
    <tr>
      <td><a href="javascript:carrega('fun-curveVertex.php');"><strong>curveVertex()</strong></a></td><td>Especifica uma curva até uma coordenada</td>
    </tr>
    <tr>
      <td><a href="javascript:carrega('fun-endShape.php');"><strong>endShape()</strong></a></td><td>Finaliza a especificação de um polígono ou superfície iniciado com <a href="javascript:carrega('fun-beginShape.php');"><strong>beginShape()</strong></a> e o desenha na tela</td>
    </tr>
    <tr>
      <td><a href="javascript:carrega('fun-vertex.php');"><strong>vertex()</strong></a></td><td>Define um novo vertice para o polígono ou superfície a ser desenhado</td>
    </tr>
  </table>


</div>
</body>
</html>

    