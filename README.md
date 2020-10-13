# ReferenceDocs (Obsoleto)

**O projeto ReferenceDocs foi descontinuado** em favor de uma plataforma aprimorada para documentação dos códigos. Sua manutenção/registro no Github permanece apenas por uma questão de memória.

A plataforma-base para documentação dos códigos adotada atualmente é o projeto [Sumarion](https://github.com/ranoya/sumarion).

Alguns exemplos de linguagens sendo documentadas na nova plataforma:
[Código Processing](https://www.ranoya.com/books/public/processing/)
[Código HTML](https://www.ranoya.com/books/public/html/)
[Código CSS](https://www.ranoya.com/books/public/css/)

---

Este projeto consiste em uma plataforma para construção de guias de referência para linguagens de programação. Ele foi criado para auxiliar no ensino de programação para alunos em estágio inicial, de forma que os elementos da programação pudessem ser apresentados de forma simples e fácil, e que eles pudessem alterar os códigos usados como exemplo e ver o resultado destas alterações imediatamente na própria documentação.

Por trás deste projeto há uma iniciativa de tentar documentar as diversas linguagens utilizadas para construção de código criativo (computação criativa, design paramétrico, tecnologia criativa, ou tantos outros nomes como este tipo de programação é conhecida), e assim torná-las acessíveis para estudantes de cursos como design, arquitetura, arte, etc.

## Estado do código

Peço desculpas porque o código, definitivamente, não é dos mais organizados e consistentes. Ele está mal documentado, e organizado de uma forma pouco convencional. Ele foi construído de forma "espontânea", sem muito planejamento, e consequentemente é uma verdadeira coulha de retalhos. Quem sabe ao compartilhá-lo por aqui, esta condição melhore, e o projeto possa se tornar algo melhor.

## Como o sistema funciona

Neste link há um exemplo funcionando de um guia de programação para a linguagem Processing:

https://www.ranoya.com/aulas/designgenerativo/playgroundDocs/processingbasics.php?theme=dgen&elementos=processing

(os códigos deste exemplo estão todos disponíveis na pasta **playgroundDocs**)

Em cada documento HTML/PHP/ETC. que documentará uma instrução, função, procedimento, objeto, etc. (**as páginas de conteúdo**) será necessário carregar o arquivo _dev2.js_ e a biblioteca _JQuery_. Isso pode ser feito utilizando versões locais dos arquivos, ou apontando diretamente para uma versão online dos arquivos:

```
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://www.ranoya.com/aulas/playgroundDocs/dev2.js"></script>
```

Será necessário incluir 2 variáveis à URL ao acessar cada _página de conteúdo_: a variável _theme_ definirá um arquivo _.css_ contendo o estilo (basicamente cores dos elementos) da documentação, e a variável _elementos_ que apontará para um arquivo _.json_ contendo uma estrutura de capítulos, e documentos associados, que compõe todo o catálogo de instruções, funções, procedimentos, etc.

No exemplo do guia de programação em Processing, serão carregados os arquivos _dgen.css_ e _processing.json_ . Você verá que também está disponível na pasta os arquivos _dgen-darkmode.css_ e _processing-sofunc.json_ . Se alterar as variáveis do exemplo com estes arquivos, você terá um guia diferente:

https://www.ranoya.com/aulas/designgenerativo/playgroundDocs/processingbasics.php?theme=dgen-darkmode&elementos=processing-sofunc

Repare que todos os documentos que compõem o guia (um documento por instrução/função) são exatamente os mesmos, mas sua organização no guia é diferente (enquanto o primeiro exemplo tem uma estrutura mais organizada de cada elemento da linguagem, o segundo tem apenas uma organização por ordem alfabética das funções).

## O que o código faz

Assim que é carregado, o arquivo _dev2.js_ implementa na _página de conteúdo_ a coluna lateral com o catálogo de documentos conforme está delineado pelo arquivo _.json_ indicado na url. Ele também carrega outras 2 dependências do código, logo nas suas 3 primeiras linhas: o _Processing.js_, necessário para exibir os exemplos feitos com esta linguagem, e o _ACE Editor_, necessário para exibir e editar os códigos nos documentos. Isto é feito carregando os arquivos disponíveis em um servidor próprio, e pode ser alterado para que sejam carregados a partir de outros endereços.

```
document.write('<script src="https://www.ranoya.com/aceeditor/src-min-noconflict/ace.js" type="text/javascript"></script>');
document.write('<script src="https://www.ranoya.com/public/dev/processing.min.js" type="text/javascript"></script>');
document.write('<script src="https://www.ranoya.com/aceeditor/src-min-noconflict/ext-language_tools.js" type="text/javascript"></script>');
```

### carrega()

o arquivo _dev2.js_ também inclui algumas funções necessárias para a boa interação entre cada _página de conteúdo_: a função **carrega()** permite carregar outro documento do catálogo sem que seja necessário apontar na url quais são as variáveis _theme_ e _elementos_. Ela existe para facilitar a reutilização dos mesmos documentos entre multiplos guias diferentes. Ao criar um link no documento para outra _pagina de conteúdo_, você pode utilizar este função conforme o exemplo abaixo:

```
<a href="javascript:carrega('fun-stroke.php');"><strong>stroke()</strong></a>
```

isto fará com que o documento _fun-stroke.php_ sejá carregado mantendo a mesma estrutura de capítulos e o mesmo estilo que estava sendo utilizado até o momento.

### Editor e visualizador em tempo real

Outro recurso útil implementado por _dev2.js_ é a inclusão do _ACE Editor_ é de um mecanismo visualizador em tempo real do código. Você pode organizar o layout deste editor e visualizador da maneira como preferir. No exemplo, isto é feito colocando a visualização em um espaço reduzido, ao lado do próprio código. Isto é feito com esta estrutura em HTML:

```
<div class="diagramahalf firstblock">
<iframe id="View_editor_1"></iframe>
</div>

<div class="diagramahalf">
<pre class='editor codefull' data-name='editor_1' id='editor_1' data-linguagem="java" data-acetheme="tomorrow">
void draw() {

  line(10,50,100,150);

}</pre>
</div>
```

a classe "diagramahalf" divide blocos em 50% da tela, e a classe "firstblock" compensa o espaçamento a direita para que os blocos não fiquem colados um no outro.

Para cada bloco com um editor colocado na _página de documento_ você deverá identificar e definir algumas parâmetros:

- O código que será incorporado ao editor precisa ficar dentro da tag pre. É necessário converter as entidades como aspas para &quot ou < e > para &lt &gt para que o navegador não interprete o que está dentro de pre como parte do código HTML
- O iframe que receberá a visualização do que produz o código deverá ter um **id** que segue a regra View*editor* **N**
- O pre que implementará o editor precisará receber um **data-name** e um **id** que segue a regra editor\_ **N** , cujo **N** é o mesmo do iframe que receberá a visualização
- Os valores de **N** precisam ser sequenciais e crescentes. Se houver um editor* **1** e um editor* **3**, mas não um editor\_ **2**, o sistema não conseguirá resolvê-lo.
- Para cada editor é possível definir um tema do ACE Editor com a propriedade **data-acetheme** e uma linguagem para o code highlight com a propriedade **data-linguagem**
- Se você só quer implementar um bloco de código, sem que ele tenha uma visualização, basta não criar um iframe com **id** View*editor* **N** . Isso não causará nenhum problema no sistema. Você pode perfeitamente ter um iframe View_editor_1, e um iframe View_editor_3, sem que exista um View_editor_2.
- Para cada editor é possível incluir um pré-código, e um pós-código. No caso do Processing, por exemplo, é incluída a chamada para o Processing.js no visualizador pelo pré-código. Se você abrir a _página de conteúdo_ _fun-line.php_ no exemplo, verá que as linhas 27 a 44 apresentam o seguinte código:

```
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
```

As variáveis em javascript Predata*editor* **N** e Postdata*editor* **N** definem o código que será incluído antes, e depois, do código que está presente no editor de número **N**. Uma especial atenção deve ser dada a construção desta string, para que o navegador não confunda o que faz parte da string com o seu próprio código (por isso ela é picotada cortando cada tag HTML em partes separadas da string).

Neste código também é possível ver uma variável de configuração geral do ACE Editor acionado ou desligando alguns de seus recursos. Para saber o que pode ser configurado no ACE, consulte sua documentação em https://github.com/ajaxorg/ace/wiki/Configuring-Ace

## Estrutura do arquivo .json

O arquivo que estrutura a coluna com a organização das páginas tem o seguinte formato:

```
[
	{
		"cordefundo": "",
		"cordefrente": "",
		"logourl": "https://www.ranoya.com/Assets/Logotipos/auladgen-purplevazado.svg",
		"nextrefdoc": "",
		"nextrefdocurl": ""
	},
	{
		"capitulo": "LINGUAGEM",
		"topico": "Processing",
		"url": "introProcessing.php"
	},
	{
		"capitulo": "LINGUAGEM",
		"topico": "Outras linguagens",
		"url": "introCodigoCriativo.php"
	},
	{
		"capitulo": "FUNDAMENTOS",
		"topico": "Introdução",
		"url": "processingbasics.php"
	},
	{
		"capitulo": "FUNDAMENTOS",
		"topico": "Variáveis",
		"url": "variaveisbasics.php"
	},
	{
		"capitulo": "FUNÇÕES ESPECIFICADORAS",
		"topico": "strokeCap()",
		"url": "fun-strokeCap.php"
	},
	{
		"capitulo": "FUNÇÕES ESPECIFICADORAS",
		"topico": "strokeWeight()",
		"url": "fun-strokeWeight.php"
	}
]
```

O primeiro bloco é obrigatório, e estabelece algumas configurações. As duas primerias propriedades (_cordefundo_ e _cordefrente_) foram depreciadas, mas ainda precisam constar no documento; A propriedade _logourl_ aponta para uma imagem de cabeçalho da coluna de organização dos conteúdos; a prorpriedade _nextrefdoc_ define um nome para um outro guia que pode estar associado, e _nextrefdocurl_ indica sua url. No exemplo abaixo, estas propriedades apontam para um guia de CSS associado ao guia de HTML:

https://www.ranoya.com/aulas/webdesign/playgroundDocs/introHTML.php?theme=html&elementos=html

O guia CSS, em contrapartida, aponta nestas mesmas propriedades, para o guia HTML.

Do segundo bloco em diante, se definem capítulos, tópicos e seus respectivos documentos. Enquanto a propriedade _capitulo_ não se alterar, o sistema incorporará os tópicos no mesmo capítulo; a propriedade _topico_ é o texto que aparece na coluna de conteúdos, e _url_ o arquivo para o qual o sistema deverá apontar. As propriedades de _theme_ e _elementos_ serão mantidas sem a necessidade de serem indicadas em cada _url_.

## Implementação

Pela necessidade de tantas explicações, é evidente que este código está longe de ser uma construção elegante e bem estruturada. Espero que não seja tão confuso implementá-lo quanto estou imaginando que seja. Peço novamente desculpa pela forma desorganizada como ele foi construído.

Não sei até que ponto vale à pena tentar aprimorá-lo. Talvez seja mais produtivo incorporar algumas de suas ideias em um mecanismo melhor estruturado.

## Uso

Divirta-se. Copie, modifique, distribua, incorpore em seu site, e faça o que achar melhor com ele. Sou professor universitário, e construí essa ferramenta para poder realizar meu trabalho. Uma menção será apreciada, mas não é necessária. Uma menção ao pessoal do Processing.js, do JQuery e do ACE Editor é recomendada... eles é que fizeram o trabalho pesado.

Este código está disponível sobre licença GNU GPLv3.
