<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name = "pinterest" content = "nopin" />
    <meta name="pinterest" content="nohover">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>fill (Processing) | ReferenceDocs</title>
    <meta name="generator" content="ReferenceDocs" />
    <meta name="description" content="Guia de referencia de programação em Processing">
    <meta name="author" content="Prof. Dr. Guilherme Ranoya">
    <meta name="keywords" content="programação criativa, arte generativa, design generativo, design paramétrico, código criativo, processing">
    <meta property="og:url" content="<?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; echo $actual_link; ?>">
    <meta property="og:title" content="fill (Processing) | ReferenceDocs">
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
  <h1>fill()</h1>

  <p>A função <strong>fill()</strong> define uma cor de preenchimento para o desenho de formas bidimensionais (polígonos, shapes, elípses, etc.).</p>

  <h3><span class="marca">Uso</span></h3>


<div class="diagramahalf firstblock">
<iframe id="View_editor_1"></iframe>
</div>

<div class="diagramahalf">
<pre class='editor codefull' data-name='editor_1' id='editor_1' data-linguagem="java" data-acetheme="tomorrow">
void draw() {

  fill(#78008A);
  ellipse(50,50,50,50);
  
}</pre>
</div>

  <h3><span class="marca">Sintaxe</span></h3>

  <p><strong>fill(<span class="marca">c1</span><span class="optionalattr">,c2</span><span class="optionalattr">,c3</span><span class="optionalattr">,a</span>);</strong><br><strong>fill(<span class="marca">color</span>);</strong></p>

  <h3><span class="marca">Entradas</span></h3>

  <table>
    <tr>
      <th>variável</th>
      <th>tipo</th>
      <th>formato</th>
      <th>exemplo</th>
      <th>descrição</th>
    </tr>
    <tr>
      <td><span class="marca">c1</span></td><td>float</td><td>escala de cinza</td><td>0 - 255</td><td>valor que representa registro em escala de cinzas, sendo 0 o preto absoluto, e 255 o branco absoluto</td>
    </tr>
     <tr>
      <td><span class="marca">c1</span></td><td>int</td><td>registro de cor hexadecimal</td><td>#000000 - #FFFFFF</td><td>valor que representa registro de cor RGB</td>
    </tr>
    <tr>
      <td><span class="marca">c1</span></td><td>float</td><td>canal vermelho em sistema RGB</td><td>0 - 255</td><td>valor que representa o canal vermelho do sistema RGB</td>
    </tr>
    <tr>
      <td><span class="marca">c2</span></td><td>float</td><td>canal verde em sistema RGB</td><td>0 - 255</td><td>valor que representa o canal verde do sistema RGB</td>
    </tr>
    <tr>
      <td><span class="marca">c3</span></td><td>float</td><td>canal azul em sistema RGB</td><td>0 - 255</td><td>valor que representa o canal azul do sistema RGB</td>
    </tr>
    <tr>
      <td><span class="marca">c1</span></td><td>int</td><td>frequência em sistema HSB</td><td>0 - 360</td><td>ângulo em graus do espectro de cor, sendo 0 e 360 a cor vermelha, 90 a cor verde, e 180 a cor azul</td>
    </tr>
    <tr>
      <td><span class="marca">c2</span></td><td>float</td><td>saturação em sistema HSB</td><td>0 - 255</td><td>valor que representa a saturação no sistema HSB, sendo 0 o absolutamente pálido, e 255 o super-saturado</td>
    </tr>
    <tr>
      <td><span class="marca">c3</span></td><td>float</td><td>brilho em sistema HSB</td><td>0 - 255</td><td>valor que representa o brilho no sistema HSB, sendo 0 o absolutamente escuro, e 255 o absolutamente claro</td>
    </tr>
    <tr>
      <td><span class="marca">a</span></td><td>float</td><td>transparência</td><td>0 - 255</td><td>valor que representa a transparência, sendo 0 o absolutamente transparente, e 255 o absolutamente opaco</td>
    </tr>
    <tr>
      <td><span class="marca">color</span></td><td>color</td><td>retorno de função</td><td>color c = <a href="javascript:carrega('fun-color.php');"><strong>color(<span class="marca">255</span>,<span class="marca">255</span>,<span class="marca">0</span>);</strong></a></td><td>variável que guarda um registro de cor definido através da função <a href="javascript:carrega('fun-color.php');"><strong>color()</strong></a></td>
    </tr>
    
  </table>

  <h3><span class="marca">Retorno</span></h3>

  <p><strong>fill()</strong> é uma função do tipo <span class="marca">void</span>, e portanto não retorna nenhum valor.</p>

  <h3><span class="marca">Observações</span></h3>

  <p><strong>fill()</strong> recebe valores em formatos diferentes, e os resolve conforme são dados. Se apenas um valor <span class="marca">float</span> for especificado, ela interpretará que se trata de uma escala de cinzas; se um valor hexadecimal for especificado, ela interpretará que se trata de um registro RGB; se um valor do tipo <span class="marca">color</span> for especificado, ela usará este registro com as propriedades estabelecidas nele; se 2 valores forem especificados, ela interpretará que se trata de uma escala de cinzas com transparência; se 3 valores forem especificados, ela recorrerá ao que for definido por <a href="javascript:carrega('fun-colorMode.php');"><strong>colorMode()</strong></a> para interpretá-los; se um quarto valor for especificado, ela o interpretará como o canal alpha (transparência).</p>

  <h3><span class="marca">Funções associadas</span></h3>

  <table>
    <tr>
      <th>função</th>
      <th>relação</th>
    </tr>
    <tr>
      <td><a href="javascript:carrega('fun-color.php');"><strong>color()</strong></a></td><td>Define propriedades de cor armazenadas em uma variável</td>
    </tr>
    <tr>
      <td><a href="javascript:carrega('fun-colorMode.php');"><strong>colorMode()</strong></a></td><td>Define o sistema de cor utilizado (RGB ou HSB)</td>
    </tr>
    <tr>
      <td><a href="javascript:carrega('fun-noFill.php');"><strong>noFill()</strong></a></td><td>Define o preenchimento como vazio (nulo)</td>
    </tr>
  </table>


</div>
</body>
</html>

    