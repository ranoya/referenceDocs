<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name = "pinterest" content = "nopin" />
    <meta name="pinterest" content="nohover">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Geometria (Processing) | ReferenceDocs</title>
    <meta name="generator" content="ReferenceDocs" />
    <meta name="description" content="Guia de referencia de programação em Processing">
    <meta name="author" content="Prof. Dr. Guilherme Ranoya">
    <meta name="keywords" content="programação criativa, arte generativa, design generativo, design paramétrico, código criativo, processing">
    <meta property="og:url" content="<?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; echo $actual_link; ?>">
    <meta property="og:title" content="Geometria (Processing) | ReferenceDocs">
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
    highlightSelectedWord: true,
    wrapBehavioursEnabled: true
    
  };

  Predata_editor_1 = "<styl" + "e>body, html { margin: 0; padding: 0; }</sty" + "le>" + "<canvas id='pjs' " + "style='outline: none;'>" + " </canvas><scri"+ "pt src='https://www.ranoya.com/public/dev/processing.min.js'></sc" + "ript><scrip" + "t type='application/processing' data-processing-target='pjs'>" + "size(320,200); background(#ffffff);";
 
 /*
  Predata_editor_2 = "<style>body{ font-family: courrier, monospace; color: #ac2ac6; } span { color: #cccccc; }</style><scr" + "ipt>ln = 1; function println(d) { document.write('<span>' + ln + ': </span>' + d + '<br>'); ln++; }";
  */
 
  Predata_editor_2 = "<styl" + "e>body, html { margin: 0; padding: 0; }</sty" + "le>" + "<canvas id='pjs' " + "style='outline: none;'>" + " </canvas><scri"+ "pt src='https://www.ranoya.com/public/dev/processing.min.js'></sc" + "ript><scrip" + "t type='application/processing' data-processing-target='pjs'>" + "void setup() { size(150,150); background(#eeeeee); frameRate(20); stroke(#78008A); strokeWeight(2); fill(#78008A); }";

  Postdata_editor_1 = "fill(#cccccc); textSize(18); text('1:', 15, 20); text('2:', 15, 40); text('3:', 15, 60); text('4:', 15, 80); text('5:', 15, 100); text('6:', 15, 120); fill(#ac2ac6); text('a1g = ' + a1g, 40,20); text('a1r = ' + a1r, 40,40); text('a2g = ' + a2g, 40,60); text('a2r = ' + a2r, 40,80); text('a1r2 = ' + a1r2, 40,100); text('a2g2 = ' + a2g2, 40,120);" + "</scr" + "ipt>";

  Postdata_editor_2 = "</scr" + "ipt>";

  Predata_editor_3 = Predata_editor_2;
  Postdata_editor_3 = Postdata_editor_2;

  Predata_editor_4 = Predata_editor_2;
  Postdata_editor_4 = Postdata_editor_2;

  Predata_editor_5 = Predata_editor_2;
  Postdata_editor_5 = Postdata_editor_2;

  Predata_editor_6 = Predata_editor_2;
  Postdata_editor_6 = Postdata_editor_2;

  Predata_editor_7 = Predata_editor_2;
  Postdata_editor_7 = Postdata_editor_2;

  Predata_editor_8 = Predata_editor_2;
  Postdata_editor_8 = Postdata_editor_2;

  </script>

  <div id="texto">
  <h1><span class="marca">Geometria</span></h1>

  <p>A construção de uma expressão gráfica computacional depende integralmente do domínio sobre a geometria e a matemática aplicada ao plano cartesiano. O conhecimento sobre algumas <span class="marca">funções</span> e como utilizá-las pode ser essencial para o desenvolvimento dos artefatos de expressão computacional.</p>

  <p>A geometria computacional utiliza <span class="marca">radianos</span> no lugar de <span class="marca">graus</span> para representar ângulos. <span class="marca">3.14159265359 radianos</span> (<span class="marca">&pi; radianos</span>) equivalem a <span class="marca">180 graus</span>. É preferível que adotemos a métrica de <span class="marca">radianos</span> nos cálculos com ângulos para não realizarmos processamento desnecessário, mas a conversão entre os dois sistemas pode ser feita através de cálculo <strong>angulo_rad</strong> = <strong>angulo_grau</strong> x <span class="marca">PI</span> &divide; <span class="marca">180</span>, ou <strong>angulo_grau</strong> = <strong>angulo_rad</strong> x <span class="marca">180</span> &divide; <span class="marca">PI</span>. <span class="marca">Processing</span> possui também duas funções para realizar esta conversão: <strong>radians()</strong> para converter ângulos de <span class="marca">graus</span> para <span class="marca">radianos</span>, e <strong>degrees()</strong> para realizar o processo inverso.</p>

<div class="diagramahalf">
<pre class='editor codefull' data-name='editor_1' id='editor_1' data-linguagem="java" data-acetheme="tomorrow">
float a1g = 60;
float a2r = 3.1428;
float a1r = a1g * PI / 180;
float a2g = a2r * 180 / PI;
float a1r2 = radians(a1g);
float a2g2 = degrees(a2r);
</pre>
</div>

<div class="diagramahalf secondsmallblock" style="height: 140px;">
<iframe id="View_editor_1" style="height: 140px;"></iframe>
</div>


<h3><span class="marca">Matriz de transformação</span></h3>

<p>A matriz de transformação é uma matriz de cálculo que está sendo constantemente aplicada a tudo que se desenha na tela do computador, seja ela aplicada àpenas uma porção da tela, ou a sua totalidade. Quando aplicamos modificações nesta matriz, aquilo que é desenhado se transforma conforme as instruções dadas. As operações na matriz de transformação são feitas dentro da funções <a href="javascript:carrega('fun-pushMatrix.php');"><strong>pushMatrix()</strong></a> e  <a href="javascript:carrega('fun-popMatrix.php');"><strong>popMatrix()</strong></a>. No Processing, ela se comporta como um sistema cartesiano virtual, que desenhará no sketch do processing de maneira diferente de seu sistema cartesiano original, até que seja terminado por <a href="javascript:carrega('fun-popMatrix.php');"><strong>popMatrix()</strong></a>.</p>

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




<h3><span class="marca">Translação</span></h3>

<p>Translações são operações de deslocamento sobre os desenhos sendo construídos. Operações de transformação são feitas sobre a matriz de processamento gráfico, e precisam ser realizadas dentro das funções  <a href="javascript:carrega('fun-pushMatrix.php');"><strong>pushMatrix()</strong></a> e  <a href="javascript:carrega('fun-popMatrix.php');"><strong>popMatrix()</strong></a>. A função  <a href="javascript:carrega('fun-translate.php');"><strong>translate()</strong></a> realiza o deslocamento (em relação ao sistema cartesiano original) daquilo que for desenhado dentro da matriz alterada.</p>

<div class="diagramahalf firstblock">
<iframe id="View_editor_3"></iframe>
</div>

<div class="diagramahalf">
  <pre class='editor codefull' data-name='editor_3' id='editor_3' data-linguagem="java" data-acetheme="tomorrow">

function poligono() {
  beginShape();
  vertex(0,0);
  vertex(50,30);
  vertex(40,60);
  vertex(20,40);
  endShape(CLOSE);
}

void draw() {

  pushMatrix();
  translate(30,20);
  poligono();
  popMatrix();

  pushMatrix();
  translate(90,40);
  poligono();
  popMatrix();

  pushMatrix();
  translate(20,80);
  poligono();
  popMatrix();

}</pre>
</div>


<h3><span class="marca">Rotação</span></h3>

<p>Rotações no plano (bidimensionais) são operações de transformação feitas sobre a matriz de processamento gráfico e precisam ser realizadas dentro das funções  <a href="javascript:carrega('fun-pushMatrix.php');"><strong>pushMatrix()</strong></a> e  <a href="javascript:carrega('fun-popMatrix.php');"><strong>popMatrix()</strong></a>. Toda rotação acontece em relação a um ponto utilizado como pivô, que no caso das transformações sobre a matriz, será sempre o ponto de origem do sistema ortogonal atual (o ponto <span class="marca">0</span>,<span class="marca">0</span> da própria matriz). A função  <a href="javascript:carrega('fun-rotate.php');"><strong>rotate()</strong></a> realiza o giro bidimensional do sistema cartesiano, e geralmente é utilizada em conjunção com a função <a href="javascript:carrega('fun-translate.php');"><strong>translate()</strong></a>, para que os desenhos rotacionados possam ser posicionados em algum lugar da tela em relação ao sistema de coordenadas cartesianas original (no geral, os desenhos são construídos próximos ao pivô, rotacionados, e depois deslocados para o local onde deverão ficar na tela).</p>

<div class="diagramahalf firstblock">
<iframe id="View_editor_4"></iframe>
</div>

<div class="diagramahalf">
  <pre class='editor codefull' data-name='editor_4' id='editor_4' data-linguagem="java" data-acetheme="tomorrow">

void draw() {

  pushMatrix();
    translate(50,50);
    pushMatrix();
    rotate(PI/4);
      rect(-20,-20,40,40);
    popMatrix();
  popMatrix();

  pushMatrix();
    translate(110,80);
    pushMatrix();
    rotate(PI/3);
      rect(-20,-20,40,40);
    popMatrix();
  popMatrix();

}</pre>
</div>


<h3><span class="marca">Escala</span></h3>

<p>Escalonamentos são operações de transformação feitas sobre a matriz de processamento gráfico e precisam ser realizadas dentro das funções  <a href="javascript:carrega('fun-pushMatrix.php');"><strong>pushMatrix()</strong></a> e  <a href="javascript:carrega('fun-popMatrix.php');"><strong>popMatrix()</strong></a>. O escalonamento amplia ou reduz a proporção do sistema ortogonal em relação a um ponto utilizado como pivô, que no caso das transformações sobre a matriz, será sempre o ponto de origem do sistema ortogonal atual (o ponto <span class="marca">0</span>,<span class="marca">0</span> da própria matriz). A função  <a href="javascript:carrega('fun-scale.php');"><strong>scale()</strong></a> realiza o escalonamento do sistema cartesiano, e geralmente é utilizada em conjunção com a função <a href="javascript:carrega('fun-translate.php');"><strong>translate()</strong></a>, para que os desenhos escalonados possam ser posicionados em algum lugar da tela em relação ao sistema de coordenadas cartesianas original (no geral, os desenhos são construídos próximos ao pivô, escalonados, e depois deslocados para o local onde deverão ficar na tela).</p>

<div class="diagramahalf firstblock">
<iframe id="View_editor_5"></iframe>
</div>

<div class="diagramahalf">
  <pre class='editor codefull' data-name='editor_5' id='editor_5' data-linguagem="java" data-acetheme="tomorrow">

void draw() {

  pushMatrix();
    translate(75,75);
    scale(2.5);
    rect(-20,-20,40,40);
  popMatrix();

}</pre>
</div>




<h3><span class="marca">Trigonometria</span></h3>


<p>As funções trigonométricas auxiliam quando desejamos usar relações matemáticas contidas em uma circunferência. <span class="marca">Cosseno</span> e <span class="marca">seno</span> informam projeções horizontais e verticais de um ponto em um círculo através de seu ângulo, considerando seu raio como sendo <span class="marca">1</span>. As funções <strong>cos()</strong> e <strong>sin()</strong> recebem seus valores de entrada em <span class="marca">radianos</span>, e retornam os valores de <span class="marca">cosseno</span> e <span class="marca">seno</span> para aquele ângulo. É possível desenhar circunferências, senoides, cossenoides e outras formas baseadas na progressão angular, e na forma como estes valores se alteram em relação aos ângulos que lhes determinam.</p>

<div class="diagramahalf firstblock">
<iframe id="View_editor_6"></iframe>
</div>

<div class="diagramahalf">
  <pre class='editor codefull' data-name='editor_6' id='editor_6' data-linguagem="java" data-acetheme="tomorrow">
float a = 0;

void draw() {

  background(#eeeeee);

  int raio = 50;
    
    float mx = cos(a) * raio;
    float my = sin(a) * raio;

    line(75,75, 75 + mx, 75 + my);

    a = a + 0.1;
    if (a > (2 * PI)) {

      a = 0;

    }
}</pre>
</div>

<p>A <span class="marca">tangente</span> é uma função trigonométrica que aponta a dimensão de uma coluna no limite da circunferência sobre uma linha que a tangencie, quando traçamos uma reta do centro dela em um ângulo dado, e lhe extendendo até onde esta reta cruza com a linha tangencial. Este conjunto de linhas (a base horizontal, a linha em ângulo e a coluna na linha tangencial) formam um triângulo retângulo cujos catetos são a base horizontal e a coluna medida pela tangente. De forma mais aritimética, a <span class="marca">tangente</span> é a relação entre o <span class="marca">seno</span> e o <span class="marca">cosseno</span> de um ângulo (<span class="marca">tg a</span> = <span class="marca">sen a</span> &divide; <span class="marca">cos a</span>). É bom recordar que a <span class="marca">tangente</span> de <span class="marca">90&deg;</span> é <span class="marca">+&infin;</span> e a <span class="marca">tangente</span> de <span class="marca">270&deg;</span> é <span class="marca">-&infin;</span>.</p>

<div class="diagramahalf firstblock">
<iframe id="View_editor_7"></iframe>
<p><a target="_blank" href="https://www.ranoya.com/aulas/tryit/processing/?embed=plain&psize=70&panels=0&file=https://www.ranoya.com/aulas/designgenerativo/exemplos/sincostan.pde"><strong>Ampliar</strong></a></p>
</div>

<div class="diagramahalf">
  <pre class='editor codefull' data-name='editor_7' id='editor_7' data-linguagem="java" data-acetheme="tomorrow">
float a = 0.9;
int raio = int(height/2.8);
int centerX=75;
int centerY=75;
int stSinX = -20;
int stCosY = -5;

void draw() {

  background(#eeeeee);

    raio = int(height/2.8);
    centerX = width/2;
    centerY = height/2;

    stroke(#78008A);
    strokeWeight(1);
    line(centerX+cos(a)*raio,centerY+sin(a)*raio,centerX,centerY+sin(a)*raio);
    line(centerX+cos(a)*raio,centerY+sin(a)*raio,centerX+cos(a)*raio,centerY);

    noFill();
    stroke(#999999);
    strokeWeight(1);
    line(centerX,0,centerX,width);
    line(0,centerY,width,centerY);
    
    ellipse(centerX,centerY,2*raio,2*raio);
    strokeWeight(2);
    line(raio+centerX,0,raio+centerX,height);
    line(centerX,centerY,centerX+raio,centerY+(tan(a)*raio));
    if (mouseX&lt;centerX){
        line(centerX,centerY,centerX+cos(a)*raio,centerY+sin(a)*raio);
    }
    fill(#999999);
    ellipse(cos(a)*raio+centerX,sin(a)*raio+centerY,5,5);

    stroke(#f29610);
    strokeWeight(2);
    line(raio+centerX,centerY,raio+centerX,centerY+(tan(a)*raio));
    line(centerX,centerY,centerX,centerY+sin(a)*raio);
    line(centerX,centerY,centerX+cos(a)*raio,centerY);
    fill(#78008A);
    textSize(12); 
    text(&#039;tan&#039;, centerX+raio+5, centerY+(tan(a)*raio));
    text(&#039;cos&#039;, centerX-10+cos(a)*raio, centerY + stCosY);
    text(&#039;sin&#039;, centerX + stSinX, centerY+5+sin(a)*raio);
    text(&#039;R=1&#039;, 10, 20);
    
    a = atan2(mouseY-(height/2),mouseX-(width/2));

    if (mouseX &gt; centerX) {
    stSinX = -20;
    } else {
    stSinX = +5;
    }

    if (mouseY &gt; centerY) {
    stCosY = -5;
    } else {
    stCosY = 12;
    }

}</pre>
</div>



<p>Encontrar um ângulo entre dois pontos (considerando o ângulo que se forma entre uma paralela ao eixo cartesiano horizontal e o a linha que liga os dois pontos) é um processo que normalmente é feito atraves do arco-tangente (<span class="marca">atan</span>). Esta função matemática nos informa o ângulo cujo valor de tangente é igual ao valor dado; e para encontrar o valor da tangente, é necessária uma operação aritimética: a divisão da distância vertical entre os dois pontos pela distância horizontal entre os dois pontos [(<span class="marca">y2</span> - <span class="marca">y1</span>) / (<span class="marca">x2</span> - <span class="marca">y2</span>)]. Contudo, a solução desta questão continua sendo complexa porque há ângulos diferentes que possuem o mesmo valor para a tangente, se fazendo necessária a análise de quadrantes para determinar se falamos de um ângulo de <span class="marca">60&deg;</span> ou de um ângulo de <span class="marca">120&deg;</span> (que possuem o mesmo valor de tangente).</p>

<p>Para facilitar todo este trabalho, a função <span class="marca">atan2</span> realiza o cálculo do ângulo entre o ponto de origem sistema cartesiano (<span class="marca">0</span>,<span class="marca">0</span>) e um ponto dado, retornando o ângulo em radianos com valores positivos quando o ângulo vai de <span class="marca">0&deg;</span> à <span class="marca">180&deg;</span> (apontando para baixo), e com valores negativos quando o ângulo vai de <span class="marca">180&deg;</span> à <span class="marca">360&deg;</span> (apontando para cima, retornando valores de <span class="marca">-1&deg;</span> à <span class="marca">-180&deg;</span>).</p>


<div class="diagramahalf firstblock">
<iframe id="View_editor_8"></iframe>
</div>

<div class="diagramahalf">
  <pre class='editor codefull' data-name='editor_8' id='editor_8' data-linguagem="java" data-acetheme="tomorrow">
int iX = 75;
int iY = 75;
int alfa = 0;
float radianalfa = 0;

void mouseReleased() {
  iX = mouseX;
  iY = mouseY;
}

void draw() {
  background(#eeeeee);
  stroke(#999999);
  strokeWeight(1);
  line(0,iY,150,iY);
  line(iX,0,iX,150);

  stroke(#78008A);
  strokeWeight(2);
  line(iX,iY,150,iY);

  radianalfa = atan2(mouseY - iY, mouseX - iX);
  alfa = int(degrees(radianalfa));
    
  line(iX,iY,mouseX,mouseY);

  stroke(#f29610);
  fill(#f29610);
  strokeWeight(2);
  textSize(16);
  text(alfa, (cos(radianalfa/2)*40) + iX, (sin(radianalfa/2)*40) + iY + 8);
    
  noFill();
  if (radianalfa > 0) {
    arc(iX, iY, 50, 50, -0.2, radianalfa + 0.2, OPEN);
  } else {
    arc(iX, iY, 50, 50, radianalfa - 0.2, 0.2, OPEN);    
  }
}</pre>
</div>









<h6 style="clear:both;">ATENÇÃO: Este documento ainda está sendo escrito, descrevendo funções que operam questões importantes da geometria e da trigonometria para uso do Processing</h6>


</div>
</body>
</html>

    