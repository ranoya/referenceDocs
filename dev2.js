document.write('<script src="https://www.ranoya.com/aceeditor/src-min-noconflict/ace.js" type="text/javascript"></script>');
document.write('<script src="https://www.ranoya.com/public/dev/processing.min.js" type="text/javascript"></script>');
document.write('<script src="https://www.ranoya.com/aceeditor/src-min-noconflict/ext-language_tools.js" type="text/javascript"></script>');


    // https://www.ranoya.com/aulas/webdesign/referenceDocs/introHTML.php?theme=https://www.ranoya.com/aulas/webdesign/referenceDocs/html&elementos=https://www.ranoya.com/aulas/webdesign/referenceDocs/html


    // INICIALIZAÇÃO
    // 
    

    let menubarsize = 380;


    /* grabber de parâmetros */

    $.parametros = function(name){
            var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
            if (results==null){
              return null;
            } else{
              return results[1] || 0;
            }
        };

    
    w = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
    
    if (w < 750) {

      menuisopen = false;

    } else {
    
    menuisopen = true;

    }

    tpcs = {};
    conteudoformfiltro = "";
    notable = false;
    


    // constroi html do menu com base em um json externo
    // recebe um json e um filtro, e seleciona o que deve ser apresentado
    // devolve como retorno o código html a ser colocado em #elementoDocs

    function apresentaElementos(json, filtro) {

      captold = "";
      capatual = "";
      codigohtml = "";

      //document.getElementById('elementoDocs').style.backgroundColor = json[0].cordefundo;
      //document.getElementById('elementoDocs').style.color = json[0].cordefrente;
      //
      
      w = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
      
      console.log(json[0].tamanho);
      if (json[0].tamanho || json[0].tamanho != "") {

        menubarsize = json[0].tamanho;
 
        if ($.parametros('contentonly')) {
            document.getElementById('copyright').style.display = "none";
            document.getElementById('elementoDocs').style.display = "none";
            document.getElementById('conteudoDocs').style.width = "100%";
            document.getElementById('conteudoDocs').style.left = 0;
          } else {
            if (w > 750) {
              console.log("é maior");
              document.getElementById('conteudoDocs').style.width = "calc(100% - " + (menubarsize + 20) + "px)";
              document.getElementById('conteudoDocs').style.left = (menubarsize + 20) + "px";
              document.getElementById('elementoDocs').style.width = menubarsize + "px";
              document.getElementById('elementoDocs').style.transition = "all 0.4s ease-in-out";
              document.getElementById('conteudoDocs').style.transition = "all 0.4s ease-in-out";
            } else {
              document.getElementById('elementoDocs').style.width = "100%";
              document.getElementById('elementoDocs').style.left = "calc(-100% - 20px)";
            }
          }
      }

      codigohtml = codigohtml + "<img src='" + json[0].logourl + "' style='width: calc(100%);'>";

      if (json[0].nextrefdoc || json[0].nextrefdoc != "") { codigohtml = codigohtml + "<a href='" + json[0].nextrefdocurl + "' class='topicolink' style='text-align: right'>" + json[0].nextrefdoc + " &#10562;</a>"; }      
      codigohtml = codigohtml + "<inp" + "ut type=text id='filtrodata' onchange='filtra(this.value)'>" + "<s" + "vg id='iconsearch' viewBox='0 0 76 99' fill='none' xmlns='http://www.w3.org/2000/svg'>" + "<p" + "ath fill-rule='evenodd' clip-rule='evenodd' d='M60 37.5C60 49.9263 49.9258 60 37.5 60C25.0742 60 15 49.9263 15 37.5C15 25.0737 25.0742 15 37.5 15C49.9258 15 60 25.0737 60 37.5ZM45.0078 74.248C42.582 74.7412 40.0703 75 37.5 75C16.7891 75 0 58.2104 0 37.5C0 16.7896 16.7891 0 37.5 0C58.2109 0 75 16.7896 75 37.5C75 48.8066 69.9961 58.9448 62.082 65.8203L75.4531 88.981L59 98.481L45.0078 74.248Z' fill='white'/>" + "</" + "svg>";

        for (i = 1; i<json.length; i++) {

            capatual = json[i].capitulo;
            
            if(captold != capatual) {

              codigohtml = codigohtml + "<p class='capdivisao'>" + json[i].capitulo + "</p>";
              captold = capatual;

            }
            
            if (json[i].topico.indexOf(filtro) >= 0) {
              
              minhaurl = "";
              minhaurl = String(window.location);

              if (minhaurl.indexOf(json[i].url) < 0) {
              codigohtml = codigohtml + "<a href=\"javascript:carrega('" + json[i].url + "');\" class='topicolink'>" + json[i].topico + "</a>";
            } else {
              codigohtml = codigohtml + "<a href=\"javascript:carrega('" + json[i].url + "');\" class='topicolink topicoselected'>" + json[i].topico + "</a>";

            }
          }

        }

      return codigohtml;

    }

    // carrega um documento no painel de conteúdo

    function carrega(url) {
      complemento = "?";
      if ($.parametros('theme')) { complemento = complemento + "theme=" + $.parametros('theme') + "&"; }
      if ($.parametros('elementos')) { complemento = complemento + "elementos=" + $.parametros('elementos') + "&"; }
      if ($.parametros('contentonly')) { complemento = complemento + "contentonly=" + $.parametros('contentonly') + "&"; }
      pagina = url + complemento;
      window.location = pagina;

    }


    function filtra(valor) {

      novoconteudo = valor;


        if (valor == "*" || valor == null) {

        document.getElementById('elementoDocs').innerHTML = apresentaElementos(tpcs, "");

        } else {
        
        document.getElementById('elementoDocs').innerHTML = apresentaElementos(tpcs, novoconteudo);

        }

    }

    // Ace Editor Change Viewer
    function changeContent(data, who, predata, extras) {

        var iframeA = document.getElementById(who);

        iframeA = iframeA.contentWindow || ( iframeA.contentDocument.document || iframeA.contentDocument);
        
        iframeA.document.open();
        iframeA.document.write(predata);
        iframeA.document.write(data);
        iframeA.document.write(extras);
        iframeA.document.close();


    }

    function menu() {

      document.getElementById('elementoDocs').style.transition = "all 0.4s ease-in-out";
      document.getElementById('conteudoDocs').style.transition = "all 0.4s ease-in-out";

      w = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

      if (menuisopen) {

        

        if (w > 750) {



        } else {

        menuisopen = false;

        document.getElementById('elementoDocs').style.width = "calc(100% - 20px);";
        document.getElementById('elementoDocs').style.left = "calc(-100% - 20px)";

        }


      } else {

        menuisopen = true;

        if (w <= 750) {
        
        document.getElementById('elementoDocs').style.width = "calc(100% - 20px)";
        document.getElementById('elementoDocs').style.left = 0;

        } else {

        document.getElementById('elementoDocs').style.width = menubarsize + "px";
        document.getElementById('elementoDocs').style.left = 0;
        
        }

      }


    }


    window.addEventListener("resize", function() {

    document.getElementById('elementoDocs').style.transition = "all 0.4s ease-in-out";
    document.getElementById('conteudoDocs').style.transition = "all 0.4s ease-in-out";

    if (!notable) {
      w = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

      if (w > 750) {


        menu();
        document.getElementById('elementoDocs').style.width = menubarsize + "px";
        document.getElementById('elementoDocs').style.left = 0;
        
      if (!$.parametros('contentonly')) {

        document.getElementById('conteudoDocs').style.width = "calc(100% - " + (menubarsize + 20) + "px)";
        document.getElementById('conteudoDocs').style.left = (menubarsize + 20) + "px";

      }


      }


      if (w <= 750 && !menuisopen) {

        if ($.parametros('contentonly')) {

          document.getElementById('iconmenumobile').style.display = "none";
          document.getElementById('conteudoDocs').style.paddingLeft = 0;

        }

        document.getElementById('elementoDocs').style.width = "calc(100% - 20px);";
        document.getElementById('elementoDocs').style.left = "calc(-100% - 40px);";

      }

        if ($.parametros('contentonly')) {

          document.getElementById('iconmenumobile').style.display = "none";
          document.getElementById('conteudoDocs').style.paddingLeft = 0;

        }

      if (w <= 750 && menuisopen) {

        document.getElementById('elementoDocs').style.width = "calc(100% - 20px)";
        document.getElementById('elementoDocs').style.left = 0;

      }

    } else {

        document.getElementById('iconmenumobile').style.display = "none";
        document.getElementById('conteudoDocs').style.paddingLeft = 0;

    }

    });

var cssId2 = 'myCss2';
if (!document.getElementById(cssId2))
{
    var head  = document.getElementsByTagName('head')[0];
    var link  = document.createElement('link');
    link.id   = cssId2;
    link.rel  = 'stylesheet';
    link.type = 'text/css';
    link.href = "https://www.ranoya.com/aulas/playgroundDocs/base2.css";  
    link.media = 'all';
    head.appendChild(link);
}

var cssId = 'myCss';
if (!document.getElementById(cssId))
{
    var head  = document.getElementsByTagName('head')[0];
    var link  = document.createElement('link');
    link.id   = cssId;
    link.rel  = 'stylesheet';
    link.type = 'text/css';
    if ($.parametros('theme')) {
    link.href = $.parametros('theme') + ".css";
    } else {
    link.href = "https://www.ranoya.com/aulas/playgroundDocs/defaulttheme.css";  
    }
    link.media = 'all';
    head.appendChild(link);
}

$(document).ready(function(){

    original = document.body.innerHTML;
    prehtml = "<a href=\"javascript:menu()\" id=\"iconmenumobile\"><img src=\"https://www.ranoya.com/Assets/WebsiteIcons/leftgray.svg\" style=\"width: 100%; padding-top: 50vh;\"></a><div id=\"elementoDocs\"></div><div id=\"conteudoDocs\">";
    poshtml = "<p class=\"separabloco\"></p><p id=\"copyright\"><svg width=\"719\" height=\"719\" viewBox=\"0 0 719 719\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><g id=\"ranoya.com-regexredux-truewhite\"><path id=\"Subtract\" fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M719 0H0V719H719V0ZM230.686 183.844H337.371L230.686 535.31H124L230.686 183.844ZM383.351 183.844H381.782L275.097 535.31H381.782L435.91 356.992L490.037 535.31H596.723L490.037 183.844H488.468H383.351Z\" /></g></svg> COPYRIGHT &copy; 2019, PROF. DR. GUILHERME RANOYA, dDESIGN | UFPE</p></div>";
    encherto = prehtml + original + poshtml;
    document.body.innerHTML = encherto;



    /* retira copyright e menu caso seja contentonly 
     *
    */
    if ($.parametros('contentonly')) {

      document.getElementById('copyright').style.display = "none";
      document.getElementById('elementoDocs').style.display = "none";
      document.getElementById('conteudoDocs').style.width = "100%";
      document.getElementById('conteudoDocs').style.left = 0;

    } else {

      if (w > 750) {
      document.getElementById('conteudoDocs').style.width = "calc(100% - " + (menubarsize + 20) + "px)";
      document.getElementById('conteudoDocs').style.left = (menubarsize + 20) + "px";
      document.getElementById('elementoDocs').style.width = menubarsize + "px";
      document.getElementById('elementoDocs').style.transition = "all 0.4s ease-in-out";
      document.getElementById('conteudoDocs').style.transition = "all 0.4s ease-in-out";
      } else {
      
        document.getElementById('elementoDocs').style.width = "100%";
        document.getElementById('elementoDocs').style.left = "calc(-100% - 20px)";
        
      }

    }


    // carrega elementos do "menu"
    // carrega arquivo json com os dados dos tópicos e urls a serem colocadas
    // no sistema

    if ($.parametros('elementos')) {

    notable = false;
    sumariojson = $.parametros('elementos') + ".json";
    fetch(sumariojson).then(response => response.json()).then((data) => {

          document.getElementById('elementoDocs').innerHTML = apresentaElementos(data, "");
          tpcs = data;

    });
      
      if ($.parametros('contentonly')) {

          document.getElementById('iconmenumobile').style.display = "none";
          document.getElementById('conteudoDocs').style.paddingLeft = 0;

      } 

    } else {

    notable = true;
    document.getElementById('elementoDocs').style.display = "none";
    document.getElementById('conteudoDocs').style.left = 0;
    document.getElementById('conteudoDocs').style.width = "100%";
    
    } 


// Multiple Auto Ace
ace.require("ace/ext/language_tools");
var editor;
var ednum = 0;
ace_config = {
    maxLines: Infinity,
    enableBasicAutocompletion: true,
    enableSnippets: true,
    enableLiveAutocompletion: false,
    showPrintMargin: false
};

$('.editor').each(function( index ) {
    ednum++;
    _name = "editor_"+ednum;
    code = "var name = $(this).data('name');"
    + "var linguagem = '';"
    + "var acetheme = '';"
    + "var customconfig = '';"
    + "var precode = '';"
    + "var postcode = '';"
    + "if (typeof Predata_"+_name+" != 'undefined') { precode = Predata_"+_name+"; }"
    + "if (typeof Postdata_"+_name+" != 'undefined') { postcode = Postdata_"+_name+"; }"
    + "if ($(this).data('linguagem')) { linguagem = $(this).data('linguagem');"
    + "} else { linguagem = 'html'; }"
    + "if ($(this).data('acetheme')) { acetheme = $(this).data('acetheme');"
    + "} else { acetheme = 'dreamweaver'; }"
    + "if ($(this).data('config')) { customconfig = $(this).data('config');"
    + "} else {"
    + "if (typeof acegeneralconfig != 'undefined') { customconfig = acegeneralconfig; } else { customconfig = ace_config; } }"
    +_name+" = ace.edit(this);"
    +_name+".setTheme('ace/theme/'+acetheme);"
    +_name+".getSession().setMode('ace/mode/'+linguagem);"
    +_name+".setOptions(customconfig);"
    +"var code_"+ednum+" = $('textarea[name='+name+']');"
    +"if ($('#View_"+_name+"').length) { changeContent("+_name+".getSession().getValue(),'View_"+_name+"', precode, postcode);"
    +_name+".getSession().on('change', function(){"
    +"changeContent("+_name+".getSession().getValue(),'View_"+_name+"', precode, postcode);"
    +"}); }";
    eval(code);

});




});