<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name = "pinterest" content = "nopin" />
    <meta name="pinterest" content="nohover">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>colorMode (Processing) | ReferenceDocs</title>
    <meta name="generator" content="ReferenceDocs" />
    <meta name="description" content="Guia de referencia de programação em Processing">
    <meta name="author" content="Prof. Dr. Guilherme Ranoya">
    <meta name="keywords" content="programação criativa, arte generativa, design generativo, design paramétrico, código criativo, processing">
    <meta property="og:url" content="<?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; echo $actual_link; ?>">
    <meta property="og:title" content="colorMode (Processing) | ReferenceDocs">
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
  <h1>colorMode()</h1>

  <p>A função <strong>colorMode()</strong> define qual o formato dos resitros de cor e suas dimensões, para instruir funções que recebem registros de cores em como devem desenhar algo no sketch. É através da função <strong>colorMode()</strong> que alteramos o sistema de cor entre <span class="marca">RGB</span> ou <span class="marca">HSB</span>, ou redefinimos quais os limites numéricos para representar as cores em cada um dos canais destes sistemas.</p>

  <h3><span class="marca">Uso</span></h3>


<div class="diagramahalf firstblock">
<iframe id="View_editor_1"></iframe>
</div>

<div class="diagramahalf">
<pre class='editor codefull' data-name='editor_1' id='editor_1' data-linguagem="java" data-acetheme="tomorrow">
void draw() {

  colorMode(RGB,1000,1000,1000);
  stroke(800,800,800);
  line(10,10,140,140);
  
}</pre>
</div>

  <h3><span class="marca">Sintaxe</span></h3>

  <p><strong>colorMode(<span class="marca">s</span><span class="optionalattr">,max1</span><span class="optionalattr">,max2</span><span class="optionalattr">,max2</span><span class="optionalattr">,maxA</span>);</strong></p>

  <h3><span class="marca">Entradas</span></h3>

  <table>
    <tr>
      <th>variável</th>
      <th>tipo</th>
      <th>descrição</th>
    </tr>
    <tr>
      <td><span class="marca">s</span></td><td>const<br><span class="marca">RGB</span><br><span class="marca">HSB</span></td><td>Sistema utilizado para representação das cores<br>RGB - Vermelho, Verde e Azaul<br>HSB - Espectro, Saturação e Brilho</td>
    </tr>
    <tr>
      <td><span class="marca">max1</span></td><td>float</td><td>valor máximo utilizado para representação das cores em todos os canais (se for definido apenas <span class="marca">max1</span>), ou para o primeiro canal do sistema escolhido</td>
    </tr>
    <tr>
      <td><span class="marca">max2</span></td><td>float</td><td>valor máximo utilizado para representação das cores no segundo canal do sistema escolhido</td>
    </tr>
    <tr>
      <td><span class="marca">max3</span></td><td>float</td><td>valor máximo utilizado para representação das cores no terceiro canal do sistema escolhido</td>
    </tr>
    <tr>
      <td><span class="marca">maxA</span></td><td>float</td><td>valor máximo utilizado para representação da opacidade no desenho, sendo <span class="marca">0</span> como totalmente transparente, e <span class="marca">maxA</span> como totalmente opaco</td>
    </tr>           
  </table>

  <h3><span class="marca">Retorno</span></h3>

  <p><strong>colorMode()</strong> é uma função do tipo <span class="marca">void</span>, e portanto não retorna nenhum valor.</p>

  <h3><span class="marca">Funções associadas</span></h3>

  <table>
    <tr>
      <th>função</th>
      <th>relação</th>
    </tr>
    <tr>
      <td><a href="javascript:carrega('fun-fill.php');"><strong>fill()</strong></a></td><td>Define a cor de preenchimento para polígonos e superfícies</td>
    </tr>
    <tr>
      <td><a href="javascript:carrega('fun-stroke.php');"><strong>stroke()</strong></a></td><td>Define a cor para contornos e linhas</td>
    </tr>
  </table>


</div>
</body>
</html>

    