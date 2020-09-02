<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exemplos da ação fadeIn() ou fadeOut() com JQuery</title>
    <script src="../../jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function(){
            //modifica a propriedade css do display para block, porém modifica também a propriedade opacity
            $("#btnFadeIn").click(function(){
                $("#mensagem").fadeIn();
            });
            //modifica a propriedade css do display para none e a propriedade opacity
            $("#btnFadeOut").click(function(){
                $("#mensagem").fadeOut();
            });
            
        });
    </script>
</head>
<body>
    <h3>
        Exemplos da ação fadeIn() e fadeOut() com JQuery
    </h3>
    <div id="mensagem">
        Mensagem que será ocultada / mostrada ao clicar nos botões a baixo
    </div>
    <hr/>
    <button id="btnFadeIn">
        FadeIn
    </button>
    <hr/>
    <button id="btnFadeOut">
        FadeOut
    </button>
</body>
</html>