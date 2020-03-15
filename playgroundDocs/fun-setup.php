<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name = "pinterest" content = "nopin" />
    <meta name="pinterest" content="nohover">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>setup (Processing) | ReferenceDocs</title>
    <meta name="generator" content="ReferenceDocs" />
    <meta name="description" content="Guia de referencia de programação em Processing">
    <meta name="author" content="Prof. Dr. Guilherme Ranoya">
    <meta name="keywords" content="programação criativa, arte generativa, design generativo, design paramétrico, código criativo, processing">
    <meta property="og:url" content="<?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; echo $actual_link; ?>">
    <meta property="og:title" content="setup (Processing) | ReferenceDocs">
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

  Predata_editor_1 = "<styl" + "e>body, html { margin: 0; padding: 0; }</sty" + "le>" + "<canvas id='pjs' " + "style='outline: none;'>" + " </canvas><scri"+ "pt src='https://www.ranoya.com/public/dev/processing.min.js'></sc" + "ript><scrip" + "t type='application/processing' data-processing-target='pjs'>";

  Postdata_editor_1 = "</scri" + "pt>";

 
  </script>

  <div id="texto">
  <h1>setup()</h1>

  <p>A função <strong>setup()</strong> é parte, junto com a função <a href="javascript:carrega('fun-draw.php');"><strong>draw()</strong></a>, das duas funções auto-executadas do <strong>Processing</strong>, isto é, ambas são invocadas pelo próprio contexto da plataforma.</p>

  <p>A diferença entre as duas funções é que <strong>setup()</strong> é invocada apenas uma única vez no ciclo de vida do programa, mais precisamente no primeiro momento que o código é executado, enquanto <a href="javascript:carrega('fun-draw.php');"><strong>draw()</strong></a> é invocada continuamente, numa taxa de repetição determinada pela função <a href="javascript:carrega('fun-framerate.php');"><strong>frameRate()</strong></a>.</p>

  <p>O papel da função <strong>setup()</strong> é configurar o contexto onde o código será computado, isto é, determinar suas dimensões com a função <a href="javascript:carrega('fun-size.php');"><strong>size()</strong></a>, inicializar valores para variáveis, definir registros iniciais como modalidade de definição das cores, espessura de linhas ou cores de preenchimento. Uma vez realizada esta atividade, a função <strong>setup()</strong> não tem qualquer outra utilidade, e nunca mais será invocada ao longo do código.</p>

  <h3><span class="marca">Uso</span></h3>


<div class="diagramahalf firstblock">
<iframe id="View_editor_1"></iframe>
</div>

<div class="diagramahalf">
<pre class='editor codefull' data-name='editor_1' id='editor_1' data-linguagem="java" data-acetheme="tomorrow">
void setup() {
  size(150,150);
  background(#78008A);
  frameRate(20);
}</pre>
</div>

  <h3><span class="marca">Entradas</span></h3>

  <p><strong>setup()</strong> não recebe nenhuma variável ou valor de entrada.</p>

  <h3><span class="marca">Retorno</span></h3>

  <p><strong>setup()</strong> é uma função do tipo <span class="marca">void</span>, e portanto não retorna nenhum valor.</p>


</div>
</body>
</html>

    