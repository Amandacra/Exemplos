<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exemplos da ação val() ou val(string) com JQuery</title>
    <script src="../../jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function(){
            //keyup vai pegando cada letra que for sendo digitada no campo
            $("input[name='testeVal']").keyup(function(){
                var valor = $("input[name='testeVal']").val();
                $("#mensagem").html(valor);
            });
            
            $("#limpar").click(function(){
                $("input[name='testeVal']").val("");
            });
            
        });
    </script>
</head>
<body>
    <h3>Exemplos da ação val() ou val(string) com JQuery</h3>
    <div id="mensagem">
    </div>
    <hr/>
    <input type="text" name="testeVal" placeholder="digite aqui..."/>
    <hr/>
    <button id="limpar">
        Limpar TesteVal
    </button>
</body>
</html>