<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name = "pinterest" content = "nopin" />
    <meta name="pinterest" content="nohover">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Operadores (Processing) | ReferenceDocs</title>
    <meta name="generator" content="ReferenceDocs" />
    <meta name="description" content="Guia de referencia de programação em Processing">
    <meta name="author" content="Prof. Dr. Guilherme Ranoya">
    <meta name="keywords" content="programação criativa, arte generativa, design generativo, design paramétrico, código criativo, processing">
    <meta property="og:url" content="<?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; echo $actual_link; ?>">
    <meta property="og:title" content="Operadores (Processing) | ReferenceDocs">
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

  TodosEditoresPre = "<sty" + "le>body, html { margin: 0; padding: 0; } body{ font-family: courrier, monospace; color: #ac2ac6; } span { color: #cccccc; }</s" + "tyle><scr" + "ipt>ln = 1; function println(d) { document.write('<span>' + ln + ': </span>' + d + '<br>'); ln++; }";

  TodosEditoresPost = "</scri" + "pt>";

  Predata_editor_1 = TodosEditoresPre;
  Postdata_editor_1 = "println('a = ' + a); println('r = ' + r); println('v = ' + v); println('b = ' + b); println('c = ' + c);  println('k = ' + k); println('w = ' + w); println('s = ' + s);" + TodosEditoresPost;

  Predata_editor_2 = TodosEditoresPre;
  Postdata_editor_2 = "println('a = ' + a); println('b = ' + b);" + TodosEditoresPost;
 
  Predata_editor_3 = TodosEditoresPre;
  Postdata_editor_3 = "println('interruptor = ' + interruptor);" + TodosEditoresPost;
 
  Predata_editor_4 = TodosEditoresPre;
  Postdata_editor_4 = "println('interruptor = ' + interruptor);" + TodosEditoresPost;
 
  </script>

  <div id="texto">
  <h1>Operadores aritméticos e lógicos</h1>

  <p>Operadores aritiméticos são os caracteres ou sintaxe de como devemos instruír a máquina computacional para que ela possa realizar as quatro operações matemáticas básicas, e outros tipos de operações de cálculo.</p>
  <p>Soma: <strong>+</strong><br>Subtração: <strong>-</strong><br>Multiplicação: <strong>*</strong><br>Divisão: <strong>/</strong><br>Resto da divisão: <strong>%</strong><br>Acrescimo de 1: <strong>++</strong><br>Subtração de 1: <strong>--</strong></p>
  <p>Operações como potênciação, raíz quadrada, seno, cosseno, tangente, dentre outras, precisam de instruções específicas que variam muito de linguagem para linguagem, como <strong>Math.pow(base, potencia)</strong> para Javascript, ou somente <strong>pow(base, potencia)</strong> para Processing.</p>
  <p>Além dos operadores aritméticos, temos também os operadores lógicos de atribuição e comparação de valores, e de concatenação/encadeamento de expressões lógicas.</p>
  
  <div class="third"><span class="marca">Comparação</span><br>Maior que: <strong>></strong><br>Menor que: <strong><</strong><br>Igual a: <strong>==</strong><br>Maior ou igual a: <strong>>=</strong><br>Menor ou igual a: <strong><=</strong><br>Diferente de: <strong>!=</strong></div>
  <div class="third"><span class="marca">Operações booleanas</span><br>Ou: <strong>||</strong><br>E: <strong>&&</strong><br>Não: <strong>!</strong></div>
  <div class="third"><span class="marca">Atribuição</span><br>Igual a: <strong>=</strong><br>Valor acrescido de: <strong>+=</strong><br>Valor subtraído de: <strong>-=</strong><br>Valor multiplicado por: <strong>*=</strong><br>Valor dividido por: <strong>/=</strong></div>

  <p class="separabloco"></p>

  <p>Exceto pelas operações de atribuição, toda operação lógica produz como resultado um valor <strong>boolean</strong>.</p>


<div class="diagramahalf">
<pre class='editor codefull' data-name='editor_1' id='editor_1' data-linguagem="java" data-acetheme="tomorrow">
a = 10;
r = (a == 10);
v = (a < Math.random(5));
a++;
b = a * 3;
c = b / 3;
k = (a > 5 && a < 15);
w = (b > 15 || c > 15);
s = (c != 15); </pre>
</div>

<div class="diagramahalf secondsmallblock" style="height: 200px;">
<iframe id="View_editor_1" style="height: 200px;"></iframe>
</div>

<p>O uso de operadores lógicos vêm, normalmente, acompanhados de instruções condicionais. A condicional mais comum é a do tipo <strong>if()</strong>. Ela determina que códigos devem ser processados caso a operação lógica dada seja verdadeira (<strong>true</strong>). No caso abaixo, a instrução que pertence à segunda condicional (<strong>a><span class="marca">20</span></strong>) é completamente ignorada, já que o valor de a continua menor que <strong><span class="marca">20</span></strong>.</p>

<div class="diagramahalf">
<pre class='editor codefull' data-name='editor_2' id='editor_2' data-linguagem="java" data-acetheme="tomorrow">a = 10;
b = 0;

if (a<20) {
  b = a + 1;                    
}

if (a>20) {
  b = b + 10;                        
}</pre>
</div>

<div class="diagramahalf secondsmallblock" style="height: 200px;">
<iframe id="View_editor_2" style="height: 200px;"></iframe>
</div>

<p>Considere agora o caso da lógica de um botão de interruptor: se ele estiver ligado e alguém apertar nele, ele deverá se tornar desligado, mas se ele estiver desligado e alguém apertar nele, ele deverá se tornar ligado. Tentaremos traduzir isso para a lógica de programação com o código abaixo. Experimente mudar a condição original de desligado (<strong>false</strong>) para ligado (<strong>true</strong>), e veja o resultado:</p>

<div class="diagramahalf">
<pre class='editor codefull' data-name='editor_3' id='editor_3' data-linguagem="java" data-acetheme="tomorrow">interruptor = false;  

// Se estiver ligado, desligue
if (interruptor == true) {
  interruptor = false;                   
}

// Se estiver desligado, ligue
if (interruptor == false) {
  interruptor = true;                       
}</pre>
</div>

<div class="diagramahalf secondsmallblock" style="height: 200px;">
<iframe id="View_editor_3" style="height: 200px;"></iframe>
</div>

<p>Não há mudança, na condição do interruptor, mesmo que o código esteja sem erros. A tentativa nele foi de criar uma condição para que, simulando o acionamento do interruptor, se ele estivesse ligado, passaria a ser desligado; caso o interruptor estivesse desligado, ele passaria a ser ligado.</p>

<p><span class="marca">Condição inicial 1: o interruptor se inicia desligado (false)</span><br>Nesta situação, ao passar pela primeira instrução condicional (Se estiver ligado, desligue), é detectado que a variável "interruptor" é <strong>false</strong>, e a instrução condicional é ignorada. Ao chegar na segunda instrução condicional (Se estiver desligado, ligue), ela é verdadeira, e o interruptor passa para o estado ligado (<strong>true</strong>).</p>

<p><span class="marca">Condição inicial 2: o interruptor se inicia ligado (false)</span><br>Nesta situação, ao passar pela primeira instrução condicional (Se estiver ligado, desligue), é detectado que a variável "interruptor" é <strong>true</strong>, portanto a instrução contida no bloco é processada, e a variável passa a ser <strong>false</strong>. Ao chegar na segunda instrução condicional (Se estiver desligado, ligue), ela também é verdadeira já que a variável "interruptor" que chega até ela é <strong>false</strong>, sendo então também processada, e o interruptor passa para o estado ligado (<strong>true</strong>).</p>

<p>Para evitar este tipo de contradição lógica, a instrução condicional <strong>if()</strong> possui o complemento <strong>else</strong>, que determina à máquina computacional o que fazer caso a comparação operada produza um resultado <strong>false</strong> e não <strong>true</strong>. Através do <strong>else</strong>, um segundo bloco de instruções é inserido para ser processado no resultado negativo da condicional. Experimente mudar a condição original de desligado (false) para ligado (true), e veja o resultado quando substituímos duas condicionais <strong>if()</strong> por uma <strong>if() + else</strong>:</p>

<div class="diagramahalf">
<pre class='editor codefull' data-name='editor_4' id='editor_4' data-linguagem="java" data-acetheme="tomorrow">interruptor = false; 

// Se estiver ligado, desligue... caso contrário, ligue
if (interruptor == true) {
  interruptor = false;                   
} else {
  interruptor = true;                       
}</pre>
</div>

<div class="diagramahalf secondsmallblock" style="height: 200px;">
<iframe id="View_editor_4" style="height: 200px;"></iframe>
</div>

<p>A sintaxe destes elementos pode variar dentre as diversas linguagens de programação diferentes, mas todas elas são estruturadas a partir destes mesmos elementos que, ainda que sejam representados de forma diferente, funcionarão exatamente da mesma maneira na lógica de programação para qualquer uma delas.</p> 




</div>
</body>
</html>

    