<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <style>
        div{
            width: 200px;
            height: 200px;
            border: 1px solid;
        }
    </style>
    <script src="../../jquery-3.5.1.min.js"></script>
    <!--<script src="funcionarios.js"></script>-->
    <script>
        $(document).ready(function(){
            $("#btn").click(function(){
                $.get("funcionarios.php",function(f){
                    texto = "";
                    $.each(f.funcionarios,function(indice,valor){
                        texto += valor.sobrenome + ", " + valor.nome + ".<br/>";
                    });
                    $("#div_receptora").html(texto);                    
                });
            });
        });
    </script>
</head>
<body>
    <button id="btn">Preenche Nomes de Referências no padrão ABNT</button>
    <hr/>
    <div id="div_receptora">
    </div>
</body>
</html>