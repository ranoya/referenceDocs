<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name = "pinterest" content = "nopin" />
    <meta name="pinterest" content="nohover">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>size (Processing) | ReferenceDocs</title>
    <meta name="generator" content="ReferenceDocs" />
    <meta name="description" content="Guia de referencia de programação em Processing">
    <meta name="author" content="Prof. Dr. Guilherme Ranoya">
    <meta name="keywords" content="programação criativa, arte generativa, design generativo, design paramétrico, código criativo, processing">
    <meta property="og:url" content="<?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; echo $actual_link; ?>">
    <meta property="og:title" content="size (Processing) | ReferenceDocs">
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
  <h1>size()</h1>

  <p>A função <strong>size()</strong> define o tamanho (em pixels) do sketch e qual o sistema de renderização utilizado. Ela é utilizada, geralmente, dentro da função auto-invocada <a href="javascript:carrega('fun-setup.php');"><strong>setup()</strong></a>.</p>

  <h3><span class="marca">Uso</span></h3>

<div class="codefull">
<pre class='editor codefull' data-name='editor_1' id='editor_1' data-linguagem="java" data-acetheme="tomorrow">
void setup() {

  size(500,400);
  
}</pre>
</div>

  <h3><span class="marca">Sintaxe</span></h3>

  <p><strong>size(<span class="marca">w</span><span class="marca">,h</span><span class="optionalattr">,render</span><span class="optionalattr">,arquivo</span>);</strong></p>

  <h3><span class="marca">Entradas</span></h3>

  <table>
    <tr>
      <th>variável</th>
      <th>tipo</th>
      <th>valor</th>
      <th>descrição</th>
    </tr>
    <tr>
      <td><span class="marca">w</span></td><td>int</td><td>mínimo: <span class="marca">100</span> pixels</td><td>Dimensão horizontal em pixels</td>
    </tr>
     <tr>
      <td><span class="marca">h</span></td><td>int</td><td>mínimo: <span class="marca">100</span> pixels</td><td>Dimensão vertical em pixels</td>
    </tr>
    <tr>
      <td><span class="marca">render</span></td><td>sigla</td><td><span class="marca">P2D</span><br><span class="marca">P3D</span><br><span class="marca">PDF</span><br><span class="marca">SVG</span></td><td>Tipo de Render Engine. Se não declarado, utilizará o proprio sistema do Processing.</td>
    </tr>
    <tr>
      <td><span class="marca">arquivo</span></td><td>nome de arquivo</td><td>meuarquivo.pdf<br>meuarquivo.svg<br>meuarquivo.jpg</td><td>Arquivo de saída, dependendo do tipo de <span class="marca">render</span></td>
    </tr>
    
    
  </table>

  <h3><span class="marca">Retorno</span></h3>

  <p><strong>size()</strong> é uma função do tipo <span class="marca">void</span>, e portanto não retorna nenhum valor.</p>

  <h3><span class="marca">Observações</span></h3>

  <p><strong>size()</strong> não aceita variáveis como dados de entrada. Os valores precisam ser explícitos, pois o tamanho do sketch é definido antes de qualquer informação ser processada.</p>

  <p>O uso do render <span class="marca">P2D</span> fará com que o processamento gráfico seja jogado para a placa de vídeo do computador. O <span class="marca">P2D</span> é geralmente mais rápido do que o engine padrão do processing. Na grande maioria dos casos, a diferença de performance é irrelevante, mas dependendo do que é processado, talvez seja conveniente utilizá-lo.</p>

  <p>Para utilização de renders como <span class="marca">PDF</span> e <span class="marca">SVG</span>, é necessário carregar bibliotecas externas, e há diversos métodos para gerar os arquivos, além da própria função <strong>size()</strong>.</p>




  <h3><span class="marca">SVG</span></h3>

  <p>O exemplo abaixo gera um arquivo <span class="marca">SVG</span> a partir de uma função <a href="javascript:carrega('fun-draw.php');"><strong>draw()</strong></a> que se encerra após o desenho. A função <a href="javascript:carrega('fun-exit.php');"><strong>exit()</strong></a> é essencial para que o arquivo seja fechado.</p>

<div class="codefull">
<pre class='editor codefull' data-name='editor_2' id='editor_2' data-linguagem="java" data-acetheme="tomorrow">
import processing.svg.*;

void setup() {
  size(400, 400, SVG, "arquivo.svg");
}

void draw() {
  line(0, 0, width/2, height);
  exit();
}</pre>
</div>


<h3><span class="marca">PDF</span></h3>

<p>O exemplo abaixo gera um arquivo <span class="marca">PDF</span> a partir de uma função <a href="javascript:carrega('fun-draw.php');"><strong>draw()</strong></a> que se encerra após o desenho. A função <a href="javascript:carrega('fun-exit.php');"><strong>exit()</strong></a> é essencial para que o arquivo seja fechado.</p>

<div class="codefull">
<pre class='editor codefull' data-name='editor_2' id='editor_2' data-linguagem="java" data-acetheme="tomorrow">
import processing.pdf.*;

void setup() {
  size(400, 400, PDF, "arquivo.pdf");
}

void draw() {
  line(0, 0, width/2, height);
  exit();
}</pre>
</div>


  <h3><span class="marca">Funções associadas</span></h3>

  <table>
    <tr>
      <th>função</th>
      <th>relação</th>
    </tr>
    <tr>
      <td><a href="javascript:carrega('fun-exit.php');"><strong>exit()</strong></a></td><td>Finaliza o programa</td>
    </tr>
    <tr>
      <td><a href="javascript:carrega('fun-fullScreen.php');"><strong>fullScreen()</strong></a></td><td>Atribui a tela inteira como tamanho do sketch</td>
    </tr>
  </table>


</div>
</body>
</html>

    