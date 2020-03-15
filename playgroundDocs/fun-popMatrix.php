<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name = "pinterest" content = "nopin" />
    <meta name="pinterest" content="nohover">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>popMatrix (Processing) | ReferenceDocs</title>
    <meta name="generator" content="ReferenceDocs" />
    <meta name="description" content="Guia de referencia de programação em Processing">
    <meta name="author" content="Prof. Dr. Guilherme Ranoya">
    <meta name="keywords" content="programação criativa, arte generativa, design generativo, design paramétrico, código criativo, processing">
    <meta property="og:url" content="<?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; echo $actual_link; ?>">
    <meta property="og:title" content="popMatrix (Processing) | ReferenceDocs">
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

  Predata_editor_2 = Predata_editor_1;

  Postdata_editor_2 = Postdata_editor_1;

 
  </script>

  <div id="texto">
  <h1>popMatrix()</h1>

  <p>A função <strong>popMatrix()</strong> finaliza operações na matriz de transformação para serem aplicadas no sketch. Apesar dos conceitos de matriz de transformação, e de pilha, serem complicadas de serem explicadas em poucas linhas, seu uso é bastante simples: a função <strong>popMatrix()</strong> permite que transformações equivalentes às ferramentas de ampliar/reduzir, girar ou mover das aplicações gráficas como <span class="marca">Adobe Photoshop</span> ou <span class="marca">Adobe Illustrator</span> sejam feitas sobre o desenho construído com código.</p>

  <p>Toda operação iniciada com <a href="javascript:carrega('fun-pushMatrix.php');"><strong>pushMatrix()</strong></a> precisa ser aplicada com a função <strong>popMatrix()</strong>, ou seja, assim que o desenho com alterações em sua escala, angulação ou posicionamento é construído, ele só será efetivamente desenhado quando as operações na matriz forem finalizadas com <strong>popMatrix()</strong>.


  <h3><span class="marca">Uso</span></h3>


<div class="diagramahalf firstblock">
<iframe id="View_editor_1"></iframe>
</div>

<div class="diagramahalf">
<pre class='editor codefull' data-name='editor_1' id='editor_1' data-linguagem="java" data-acetheme="tomorrow">
void draw() {

  line(50,0,150,0);
  pushMatrix();
  rotate(PI/4);
  line(50,0,150,0);
  popMatrix();

}</pre>
</div>

  <h3><span class="marca">Sintaxe</span></h3>

  <p><strong>popMatrix();</strong></p>

  <h3><span class="marca">Retorno</span></h3>

  <p><strong>popMatrix()</strong> é uma função do tipo <span class="marca">void</span>, e portanto não retorna nenhum valor.</p>

  <h3><span class="marca">Observações</span></h3>

  <p>Transformações de matrizes realizadas com <a href="javascript:carrega('fun-pushMatrix.php');"><strong>pushMatrix()</strong></a> e <strong>popMatrix()</strong> modificam a forma como o sistema cartesiano utilizado no desenho naquele momento será interpretado em relação à tela/sketch. Ao se aplicar uma rotação na matriz (o que tecnicamente é multiplicar a matriz gráfica por uma matriz rotação), o que estamos rotacionando é como o sistema de coordenadas será aplicado quando <a href="javascript:carrega('fun-popMatrix.php');"><strong>popMatrix()</strong></a> for invocada e as operações delinadas entre <strong>pushMatrix()</strong> e ela forem executadas. Estas alterações podem ser feitas recursivamente, ou seja, uma matriz alterada dentro de outra matriz alterada, e assim por diante.</p>


<h3><span class="marca">Matriz de transformação</span></h3>

<p>A matriz de transformação é uma matriz de cálculo que está sendo constantemente aplicada a tudo que se desenha na tela do computador, seja ela aplicada àpenas uma porção da tela, ou a sua totalidade. Quando aplicamos modificações nesta matriz, aquilo que é desenhado se transforma conforme as instruções dadas. As operações na matriz de transformação são feitas dentro da funções <a href="javascript:carrega('fun-pushMatrix.php');"><strong>pushMatrix()</strong></a> e popMatrix()</strong>. No Processing, ela se comporta como um sistema cartesiano virtual, que desenhará no sketch do processing de maneira diferente de seu sistema cartesiano original, até que seja terminado por <strong>popMatrix()</strong>.</p>

<div class="diagramahalf firstblock">
<iframe id="View_editor_2"></iframe>
</div>

<div class="diagramahalf">
  <pre class='editor codefull' data-name='editor_2' id='editor_2' data-linguagem="java" data-acetheme="tomorrow">
boolean toggleGrid = true;

void mouseDragged() {
  toggleGrid = false;
}

void mouseReleased() {
  toggleGrid = true;
}

function desenhaPlano() {
 if (toggleGrid == true) {
  for (int linha=1; linha < height; linha = linha + 20) {
    line (0,linha,width,linha);
  }
  for (int coluna=1; coluna < width; coluna = coluna + 20) {
    line(coluna,0,coluna,height);
  }
  textSize(16);
  text("(0,0)",5,16);
  text("(50,0)",55,16);
  text("(60,60)",65,76);
 }
 fill(#78008A);
 rect(20,20,20,20);
}

void draw() {
  background(#eeeeee);

  stroke(#999999);
  fill(#999999);
  strokeWeight(1);
  desenhaPlano()
  
  pushMatrix();

      rotate(atan2(mouseY,mouseX));
      translate(mouseX,0);
      scale(1.5);
      stroke(#f29610);
      fill(#f29610);
      strokeWeight(1);
      desenhaPlano();

  popMatrix();

}</pre>
</div>


  <h3><span class="marca">Funções associadas</span></h3>

  <table>
    <tr>
      <th>função</th>
      <th>relação</th>
    </tr>
    <tr>
      <td><a href="javascript:carrega('fun-pushMatrix.php');"><strong>pushMatrix()</strong></a></td><td>Inicia a construção de operações na nova matriz na pilha</td>
    </tr>
    <tr>
      <td><a href="javascript:carrega('fun-scale.php');"><strong>scale()</strong></a></td><td>Amplia ou reduz a escala do desenho sendo construído</td>
    </tr>
    <tr>
      <td><a href="javascript:carrega('fun-translate.php');"><strong>translate()</strong></a></td><td>Move (desloca) o desenho sendo construído no sistema de coordenadas</td>
    </tr>
    <tr>
      <td><a href="javascript:carrega('fun-rotate.php');"><strong>rotate()</strong></a></td><td>Gira o desenho em relação ao sistema de coordenadas, considerando o ponto de origem do sistema (0,0) como pivô.</td>
    </tr>
    <tr>
      <td><a href="javascript:carrega('fun-rotateX.php');"><strong>rotateX()</strong></a></td><td>Gira o desenho tridimensionalmente sobre o eixo X (horizontal)</td>
    </tr>
    <tr>
      <td><a href="javascript:carrega('fun-rotateY.php');"><strong>rotateY()</strong></a></td><td>Gira o desenho tridimensionalmente sobre o eixo Y (vertical)</td>
    </tr>
    <tr>
      <td><a href="javascript:carrega('fun-rotateZ.php');"><strong>rotateZ()</strong></a></td><td>Gira o desenho tridimensionalmente sobre o eixo Z (normal)</td>
    </tr>
  </table>


</div>
</body>
</html>

    