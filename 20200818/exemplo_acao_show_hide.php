<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exemplos da ação show() ou hide() com JQuery</title>
    <script src="../../jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function(){
            //modifica a propriedade css do display para block
            $("#btnShow").click(function(){
                $("#mensagem").show();
            });
            //modifica a propriedade css do display para none
            $("#btnHide").click(function(){
                $("#mensagem").hide();
            });
            
        });
    </script>
</head>
<body>
    <h3>
        Exemplos da ação show() e hide() com JQuery
    </h3>
    <div id="mensagem">
        Mensagem que será ocultada / mostrada ao clicar nos botões a baixo
    </div>
    <hr/>
    <button id="btnShow">
        Show
    </button>
    <hr/>
    <button id="btnHide">
        Hide
    </button>
</body>
</html>