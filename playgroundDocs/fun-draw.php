<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name = "pinterest" content = "nopin" />
    <meta name="pinterest" content="nohover">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>draw (Processing) | ReferenceDocs</title>
    <meta name="generator" content="ReferenceDocs" />
    <meta name="description" content="Guia de referencia de programação em Processing">
    <meta name="author" content="Prof. Dr. Guilherme Ranoya">
    <meta name="keywords" content="programação criativa, arte generativa, design generativo, design paramétrico, código criativo, processing">
    <meta property="og:url" content="<?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; echo $actual_link; ?>">
    <meta property="og:title" content="draw (Processing) | ReferenceDocs">
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
  <h1>draw()</h1>

  <p>A função <strong>draw()</strong> é parte, junto com a função <a href="javascript:carrega('fun-setup.php');"><strong>setup()</strong></a>, das duas funções auto-executadas do <strong>Processing</strong>, isto é, ambas são invocadas pelo próprio contexto da plataforma.</p>

  <p>A diferença entre as duas funções é que <a href="javascript:carrega('fun-setup.php');"><strong>setup()</strong></a> é invocada apenas uma única vez no ciclo de vida do programa, mais precisamente no primeiro momento que o código é executado, enquanto <strong>draw()</strong> é invocada continuamente, numa taxa de repetição determinada pela função <a href="javascript:carrega('fun-framerate.php');"><strong>frameRate()</strong></a>.</p>

  <p>O papel da função <strong>draw()</strong> é, como seu próprio nome diz, desenhar na tela. Contudo, ela acaba desempenhando papel muito mais importante: ela é o próprio fio-condutor de toda a execução de um programa em <strong>Processing</strong>. Conforme a função vai sendo continuamente executada pelo próprio contexto em que o programa está sendo executado, é <strong>draw()</strong> que vai acionando outras funções, e vai coordenando e tocando os processos do programa. De forma simples, <strong>draw()</strong> é o esqueleto central de todo progama desenvolvido em <strong>Processing</strong>, pela própria arquitetura da linguagem de programação.</p>

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

<p>É importante lembrar que <strong>draw()</strong> não apaga o campo de desenho automaticamente a cada iteração. Cada desenho realizado em cada iteração é sobreposto ao anterior ou ao que já existia na tela. Para apagar o campo de desenho é necessário usar a função <a href="javascript:carrega('fun-background.php');"><strong>background()</strong></a> no início dos procedimentos operados por <strong>draw()</strong>, de forma que o campo seja continuamente apagado e refeito.</p>

  <h3><span class="marca">Entradas</span></h3>

  <p><strong>draw()</strong> não recebe nenhuma variável ou valor de entrada.</p>

  <h3><span class="marca">Retorno</span></h3>

  <p><strong>draw()</strong> é uma função do tipo <span class="marca">void</span>, e portanto não retorna nenhum valor.</p>

</div>
</body>
</html>

    