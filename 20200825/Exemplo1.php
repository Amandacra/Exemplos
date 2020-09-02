<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>Exemplo 1 - aula de Ajax com Jquery</title>
    <style>
        div{
            width:200px;
            height:200px;
            border:1px solid;
        }
    </style>
    <script src="../../jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#btn").click(function(){
                $.get("texto.txt", function(m){
                    $("#div_receptora").html(m);
                });
            });
        });
    </script>
</head>
<body>
    <button id="btn">Botão de requisição Assíncrona</button>
    </hr>
    <div id="div_receptora"></div>
</body>
</html>