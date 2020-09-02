<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exemplos da ação HTML() ou HTML(string) com JQuery</title>
    <script src="../../jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function(){

            $("#btn1").click(function(){
                //recupera o que está escrito no campo de id mensagem e coloca em uma variável
                var texto = $("#mensagem").html();
                alert(texto);
            });
            
            $("#btn2").click(function(){
                //coloca o que está escrito na variável texto dentro do campo de id mensagem
                var texto = "<b>mudando o texto da div e aplicando negrito</b>";
                $("#mensagem").html(texto);
            });
            
        });
    </script>
</head>
<body>
    <h3>Exemplos da ação HTML() ou HTML(string) com JQuery</h3>
    <div id="mensagem">
        Texto da div
    </div>
    <hr/>
    <button id="btn1">
        Acionar ação HTML sem parâmetro
    </button>
    <hr/>
    <button id="btn2">
        Acionar ação HTML com parâmetro string
    </button>
</body>
</html>