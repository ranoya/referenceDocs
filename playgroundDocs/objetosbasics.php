<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name = "pinterest" content = "nopin" />
    <meta name="pinterest" content="nohover">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Objetos (Processing) | ReferenceDocs</title>
    <meta name="generator" content="ReferenceDocs" />
    <meta name="description" content="Guia de referencia de programação em Processing">
    <meta name="author" content="Prof. Dr. Guilherme Ranoya">
    <meta name="keywords" content="programação criativa, arte generativa, design generativo, design paramétrico, código criativo, processing">
    <meta property="og:url" content="<?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; echo $actual_link; ?>">
    <meta property="og:title" content="Objetos (Processing) | ReferenceDocs">
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

  Predata_editor_3 = "<styl" + "e>body, html { margin: 0; padding: 0; }</sty" + "le>" + "<canvas id='pjs' " + "style='outline: none;'>" + " </canvas><scri"+ "pt src='https://www.ranoya.com/public/dev/processing.min.js'></sc" + "ript><scrip" + "t type='application/processing' data-processing-target='pjs'>"; // + "void setup() { size(150,150); background(#eeeeee); frameRate(20); stroke(#78008A); strokeWeight(2); fill(#78008A); }";

  Predata_editor_4 = Predata_editor_3;
  Predata_editor_5 = Predata_editor_3;
  Predata_editor_6 = Predata_editor_3;

  Postdata_editor_3 = "</scr" + "ipt>";
  Postdata_editor_4 = Postdata_editor_3;
  Postdata_editor_5 = Postdata_editor_3;
  Postdata_editor_6 = Postdata_editor_3;
 
  </script>

  <div id="texto">
  <h1>Objetos / Instâncias</h1>

  <p><span class="marca">Classes</span> e <span class="marca">Instâncias</span> são a base para aquilo que se chama de programação orientada à objeto. Esta é uma forma mais moderna de programação (o que nem sempre significa uma forma melhor de programação).</p>

  <p>Todo <span class="marca">objeto</span> na programação é criado à partir de um modelo previamente estabelecido. Estes modelos são as <span class="marca">classes</span>. Ao se <span class="marca">instanciar</span> uma <span class="marca">classe</span>, isto é, pegar um modelo definido e sintetizar uma (ou mais) cópias dele para que operem dentro de um código, você está trabalhando dentro da lógica de programação orientada à objetos (OOP).</p>

  <p>Todo <span class="marca">objeto</span>, isto é, toda <span class="marca">instânca</span> de uma <span class="marca">classe</span>, possui suas próprias <span class="marca">variáveis</span> e suas próprias <span class="marca">funções</span>. Se ele (<span class="marca">objeto</span>) possuir <span class="marca">funções</span> para se comunicar com o resto do código, poderá interagir com o todo de forma mais orgânica; se não, ele operará praticamente como um programa autônomo e independente do resto.</p>

  <p>A <span class="marca">classe</span> abaixo cria um conjunto de 2 coordenadas <span class="marca">x</span> e <span class="marca">y</span> aleatórias. Se ela for <span class="marca">instanciada</span>, ela definirá estes valores iniciais, e só. Como a <span class="marca">classe</span> não possui nenhuma <span class="marca">função</span>, ela efetivamente não realiza nada:</p>

<pre class='editor codefull' data-name='editor_1' id='editor_1' data-linguagem="java" data-acetheme="tomorrow">
class linhaaleatoria { 

  float x1 = random(width);
  float y1 = random(height);
  float x2 = random(width);
  float y2 = random(height);
  
}</pre>

<p>Ao se incluir uma função na <span class="marca">classe</span>, ela poderá realizar alguma coisa ao ser <span class="marca">instanciada</span> e ter esta <span class="marca">função</span> invocada. Para declarar uma função na <span class="marca">classe</span> <strong>linhaaleatoria</strong>, basta proceder como se estivesse declarando uma <span class="marca">função</span> em qualquer outro código, só que dentro dela mesma:</p>

<pre class='editor codefull' data-name='editor_2' id='editor_2' data-linguagem="java" data-acetheme="tomorrow">
class linhaaleatoria { 

  float x1 = random(width);
  float y1 = random(height);
  float x2 = random(width);
  float y2 = random(height);

  void desenha() {

    line(x1,y1,x2,y2);

  }
}</pre>


<p>A <span class="marca">função</span> <strong>desenha()</strong>, de <strong>linhaaleatoria</strong> desenha uma linha nas coordenadas iniciais e finais determinadas pelas <span class="marca">variáveis x1</span>, <span class="marca">y1</span>, <span class="marca">x2</span>, <span class="marca">y2</span>. Para utilizar este <span class="marca">objeto</span> é necessário, primeiro, <span class="marca">instanciá-lo</span>. Você pode criar quantas cópias quiser do <span class="marca">objeto</span>:</p>

<pre class='editor codefull' data-name='editor_3' id='editor_3' data-linguagem="java" data-acetheme="tomorrow">
class linhaaleatoria { 

  float x1 = random(width);
  float y1 = random(height);
  float x2 = random(width);
  float y2 = random(height);

  void desenha() {

    line(x1,y1,x2,y2);

  }
}

linhaaleatoria xptoA = new linhaaleatoria();
linhaaleatoria xptoB = new linhaaleatoria();</pre>

<p>O operador <strong>new</strong> <span class="marca">instancia</span> uma <span class="marca">classe</span>. Repare que a <span class="marca">variável</span> que irá receber este <span class="marca">objeto</span> precisa ter o mesmo tipo do <span class="marca">objeto</span>, e por isso da sintaxe estranha, quase redundante, para sintetizar as cópias. Uma <span class="marca">classe</span> opera também como um novo tipo de dado.</p>

<p><span class="marca">Instanciar</span> a <span class="marca">classe</span> não realiza nada além da declaração de novas <span class="marca">variáveis</span> que serão <span class="marca">inicializadas</span> contendo um <span class="marca">objeto</span> novo, cópia da matriz <strong>linhaaleatoria</strong>. Para realizar alguma coisa, é necessário inovcar a função <strong>desenha()</strong> de cada novo <span class="marca">objeto</span>, como será feito abaixo:</p>

<div class="diagramahalf firstblock">
<iframe id="View_editor_4"></iframe>
</div>

<div class="diagramahalf">
<pre class='editor codefull' data-name='editor_4' id='editor_4' data-linguagem="java" data-acetheme="tomorrow">
void setup() { 
  size(150,150);
  background(#eeeeee);
  frameRate(20);
  stroke(#78008A);
  strokeWeight(2);
  fill(#78008A);
}

class linhaaleatoria { 

  float x1 = random(width);
  float y1 = random(height);
  float x2 = random(width);
  float y2 = random(height);

  void desenha() {

    line(x1,y1,x2,y2);

  }
}

linhaaleatoria xptoA = new linhaaleatoria();
linhaaleatoria xptoB = new linhaaleatoria();

void draw() {

  background(#eeeeee);
  xptoA.desenha();
  xptoB.desenha();

}</pre>
</div>

<p>Observe que, apesar da <span class="marca">função</span> <strong>background()</strong> apagar a tela a cada chamada de <strong>draw()</strong>, as linhas, desenhadas pela <span class="marca">função</span> <strong>desenha()</strong> de <span class="marca">linhaaleatoria</span> as desenha sempre no mesmo lugar, mesmo que os valores tenham sido determinados de forma aleatória.</p>

<p>Quase como um programa independente, os valores de <span class="marca">x1</span>, <span class="marca">y1</span>, <span class="marca">x2</span> e <span class="marca">y2</span> para cada cópia de <strong>linhaaleatoria</strong> só são gerados uma única vez, quando a <span class="marca">classe</span> é <span class="marca">instanciada</span>. A <span class="marca">função</span> <strong>desenha()</strong> traça a linha sempre com os mesmos valores de quando o <span class="marca">objeto</span> foi sintetizado. Ainda que <strong>draw()</strong> invoque os <strong>desenha()</strong> de cada <span class="marca">objeto</span> cerca de 30 vezes por segundo, em nenhum momento os valores de <span class="marca">x1</span>, <span class="marca">y1</span>, <span class="marca">x2</span> e <span class="marca">y2</span> são modificados. Vamos criar uma <span class="marca">função</span> nova em <strong>linhaaleatoria</strong> para que estes valores sejam atualizados:</p>


<div class="diagramahalf firstblock">
<iframe id="View_editor_5"></iframe>
</div>

<div class="diagramahalf">
  <pre class='editor codefull' data-name='editor_5' id='editor_5' data-linguagem="java" data-acetheme="tomorrow">
void setup() { 
  size(150,150);
  background(#eeeeee);
  frameRate(20);
  stroke(#78008A);
  strokeWeight(2);
  fill(#78008A);
}

class linhaaleatoria { 

  float x1 = random(width);
  float y1 = random(height);
  float x2 = random(width);
  float y2 = random(height);

  void desenha() {

    line(x1,y1,x2,y2);

  }

  void muda() {

    x1 = x2;
    y1 = y2;
    x2 = random(width);
    y2 = random(height);

  }
}

linhaaleatoria xptoA = new linhaaleatoria();
linhaaleatoria xptoB = new linhaaleatoria();
int tempo = 0;

void draw() {

  background(#eeeeee);
  xptoA.desenha();
  xptoB.desenha();

  tempo++;

  if(tempo>150) {

    tempo = 0;
    xptoA.muda();
    xptoB.muda();

  }
}</pre>
</div>

<p>Também é possível passar parâmetros para um <span class="marca">objeto</span> quando ele é <span class="marca">instanciado</span>. Para fazer isso, utilizamos uma <span class="marca">função construtora</span>, que nada mais é do que uma <span class="marca">função</span> que possui o mesmo nome da própria <span class="marca">classe</span> e que não possui um tipo declarado (porque ela é obrigatoriamente <span class="marca">void</span>). Esta <span class="marca">função</span> é invocada automaticamente quando a <span class="marca">classe</span> é <span class="marca">instanciada</span>, e serve para inicializar variáveis e processos.</p>

<div class="diagramahalf firstblock">
<iframe id="View_editor_6"></iframe>
</div>

<div class="diagramahalf">
  <pre class='editor codefull' data-name='editor_6' id='editor_6' data-linguagem="java" data-acetheme="tomorrow">
void setup() { 
  size(150,150);
  background(#eeeeee);
  frameRate(20);
  stroke(#78008A);
  strokeWeight(2);
  fill(#78008A);
}

class linhaaleatoria {

  float x1 = random(width);
  float y1 = random(height);
  float x2 = random(width);
  float y2 = random(height);
  int t = 100;
  int contador = 0;

  linhaaleatoria(int tempo) {

    t = tempo;

  }

  void faztudo(boolean mudatudo) {

    line(x1,y1,x2,y2);
    contador++;

    if (contador > t) {

      contador = 0;

      if (mudatudo == true) {

        x1 = random(width);
        y1 = random(height);

      } else {

        x1 = x2;
        y1 = y2;

      }

      x2 = random(width);
      y2 = random(height);      
      line(x1,y1,x2,y2);

    }

  }

}

linhaaleatoria xptoA = new linhaaleatoria(60);
linhaaleatoria xptoB = new linhaaleatoria(180);

void draw() {

  xptoA.faztudo(false);
  xptoB.faztudo(true);

}</pre>
</div>




<p>Ao incorporar a passagem de parâmetros tanto pela <span class="marca">função construtora</span> quanto pela própria <span class="marca">função</span> <strong>faztudo()</strong>, fizemos algumas modificações sensíveis na arquitetura do programa. A primeira delas é que a própria classe, de forma independente, passa a controlar seu rítmo: se no código anterior era a <span class="marca">função</span> <strong>draw()</strong> que controlava uma variável <span class="marca">tempo</span>, e fazia mudanças sincronizadas em todas as <span class="marca">instâncias</span> através das <span class="marca">funções</span> <strong>muda()</strong> de cada uma delas, agora, cada <span class="marca">instância</span> tem uma própria <span class="marca">variável contador</span>, que cresce toda vez que a <span class="marca">função</span> <strong>draw()</strong> invoca as <span class="marca">funções</span> <strong>faztudo()</strong> de cada <span class="marca">objeto</span>.</p>

<p>A segunda mudança é que com a <span class="marca">função construtora</span>, a classe passa a ser <span class="marca">instanciada</span> com um parâmetro <span class="marca">tempo</span> diferente sendo passado para cada cópia. Este valor define para cada <span class="marca">objeto</span> quando ele deve realizar a atualização dos valores de <span class="marca">x1</span>, <span class="marca">y1</span>, <span class="marca">x2</span> e <span class="marca">y2</span>, isto é, qual é o limite de <span class="marca">contador</span> para que a mudança ocorra.</p>

<p>A terceira mudança diz respeito à própria <span class="marca">função</span> <strong>faztudo()</strong>. Esta <span class="marca">função</span> passa a ser responsável por acrescer o valor de seu <span class="marca">contador</span> interno, desenhar a linha, e gerar valores aleatórios para as coordenadas quando chega o momento certo. A <span class="marca">função</span> <strong>faztudo()</strong> também passa a receber um parâmetro <span class="marca">true</span> ou <span class="marca">false</span> que determina se será desenhada uma linha inteiramente aleatória, ou se apenas um par de coordenadas será aleatório, e será ligado ao último ponto desenhado, criando um caminho contínuo.</p>

<p>No código acima, para cada três linhas desenhadas como uma sequência contínua, uma linha inteiramente aleatória será também desenhada na tela, e este trabalho é feito pela mesma <span class="marca">classe</span>, utilizando parâmetros diferentes para processar.</p>

<p>É importante ressaltar que as <span class="marca">classes</span>, apesar de terem um funcionamento independente do resto do programa, não são invocadas automaticamente, como <strong>draw()</strong>. Para que algo funcione contínuamente nas <span class="marca">instâncias</span>, é necessário criar uma <span class="marca">função</span> da própria <span class="marca">classe</span>, que será invocada continuamente pela <span class="marca">função</span> <strong>draw()</strong>. Também é importante observar que as <span class="marca">funções</span> criadas para a <span class="marca">classe</span> <strong>linhaaleatoria</strong>, em nosso exemplo, são do tipo <span class="marca">void</span>, mas nada impede que uma <span class="marca">classe</span> possua <span class="marca">funções</span> de outros tipos que retornem valores, para serem invocados como <span class="marca">int x</span> = <span class="marca">xptoA.</span><strong>distancia</strong>(<span class="marca">x</span>"); . Os valores das <span class="marca">variáveis</span> de uma <span class="marca">instância</span>, por exemplo, podem ser acessados em qualquer momento com uma instrução <span class="marca">float k</span> = <span class="marca">xptoA</span>.<span class="marca">x1</span>; . Experimente, por exemplo, capturar este valor em <strong>draw()</strong>, e desenhar um pequeno retângulo nos pontos <span class="marca">x1</span>,<span class="marca">y1</span> de uma das <span class="marca">instâncias</span>.</p>


</div>
</body>
</html>

    