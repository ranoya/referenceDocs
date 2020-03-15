<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name = "pinterest" content = "nopin" />
    <meta name="pinterest" content="nohover">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Instrodução (Código Criativo) | ReferenceDocs</title>
    <meta name="generator" content="ReferenceDocs" />
    <meta name="description" content="Guia de referencia de programação criativa">
    <meta name="author" content="Prof. Dr. Guilherme Ranoya">
    <meta name="keywords" content="programação criativa, arte generativa, design generativo, design paramétrico, código criativo, processing">
    <meta property="og:url" content="<?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; echo $actual_link; ?>">
    <meta property="og:title" content="Introdução (Código Criativo) | ReferenceDocs">
    <meta property="og:description" content="Guia de referencia de programação criativa">
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

  <div id="texto">
  <h1>Guia de programação em código criativo</h1>

  <h2>LINGUAGENS DISPONÍVEIS</h2>

  <p class="choose"><span style="padding: 10px; color: grey;">Arduino</span><a href="https://www.ranoya.com/aulas/designgenerativo/playgroundDocs/introProcessing.php?theme=dgen&elementos=processing">Processing</a><span style="padding: 10px; color: grey;">P5</span><span style="padding: 10px; color: grey;">Canvas</span><span style="padding: 10px; color: grey;">SVG</span><span style="padding: 10px; color: grey;">D3</span><span style="padding: 10px; color: grey;">Three.js</span><span style="padding: 10px; color: grey;">Unity3D</span><br></p>

  <p class="separabloco"></p>

  <p>Este é um guia desenvolvido para iniciantes que desejam entrar no mundo da <strong> programação com código criativo</strong>. <strong>Código criativo</strong> é uma das maneiras como são chamadas as ferramentas e técnicas de programação utilizadas com o intuito poético, adotadas como mídia para produtos artísticos, ou aplicadas para apresentar informação de forma inovadora. No campo do design isso é conhecido como <strong>design paramétrico</strong> ou <strong>design generativo</strong>, e na arte como <strong>arte computacional</strong>, <strong>arte eletrônica</strong> ou <strong>arte generativa</strong>; a computação tem tratado o assunto por <strong>computação criativa</strong>, <strong>tecnologias criativas</strong>, ou <strong>código criativo</strong>.</p>

  <p>A denominação que se dá a este assunto é o menos importante. A utilização da programação como instrumento para construção de artefatos multimidiáticos, ou mesmo sua aplicação como ferramenta para construção dos artefatos tradicionais, é uma tendência irreversível. Até meados de 1980, uma ilustração precisaria ser desenvolvida com papel e ferramentas como canetas, marcadores ou pincéis e tinta. Após esta data, o computador e softwares como <span class="marca">Micrografx Designer</span>, <span class="marca">Aldus Freehand</span>, <span class="marca">Ventura Publisher</span>, <span class="marca">Aldus Pagemaker</span>, <span class="marca">Adobe Photoshop</span>, começaram a ser utilizados como ferramentas correntes para isso. Atualmente, frente a ubiquidade da computação em tudo que nos cerca, podemos entender que a programação também é uma ferramenta para este exercício, e não um domínio restrito dos cientistas da computação e engenheiros de software.</p>

  <p>Esta documentação foi construída para pessoas que não possuem conhecimento em programação, pensando na possibilidade de tornar possível que profissionais que trabalham com design, arte ou comunicação possam adotar estas ferramentas e usufruir delas em suas atividades. O guia é, portanto, uma imersão inicial no assunto, e não um manual avançado para quem quer se aprofundar em técnicas específicas, desenvolvimento de jogos, efeitos especiais, etc. Ela cobrirá apenas os aspectos básicos e iniciais, e tentará ajudar os inciantes a desmontar o mito de que programação é um "bicho de sete cabeças".</p>

  <p>Toda programação, contudo, exigirá muita atenção ao que está se fazendo, e o uso intenso do raciocínio lógico. Elas se desenvolvem através de linguagens específicas, como as diferentes línguas que falamos ao redor do mundo. Para instruir um computador - uma máquina capaz de computar coisas - a realizar uma série de procedimentos e atividades, é necessário que se construam sentenças que este computador possa entender precisamente, sem ambiguidade ou necessidade de sua inferência. Por isso, cada sentença, isto é, cada linha de código, é construída respeitando regras sintáticas que não podem ser deformadas ou mal-utilizadas. Ao contrário da lingua falada, onde usamos termos errados, gírias e apropriações das mais diversas naquilo que dizemos, a programação de computadores respeita absolutamente aquilo que está definido no seu dicionário, uma lingua formal, e todo o conjunto de regras de construção formalmente estabelecidas. A mensagem "um chopps e dois pastel" pode ser perefeitamente interpretada por uma pessoa, que infere se tratar de um erro de concordância ou de ironía como figura de linguagem... mas um computador não é capaz de lidar com este tipo de distorção das regras gramaticais.</p>

  <p>É possível utilizar diversar linguagens de programação no desenvolvimento do <strong>código criativo</strong>. Por enquanto, este guia compreende apenas a linguagem de programação <a href="https://www.ranoya.com/aulas/designgenerativo/playgroundDocs/introProcessing.php?theme=dgen&elementos=processing">Processing</a> na sua base original em <span class="marca">Java</span>.</p>

</div>
</body>
</html>

    