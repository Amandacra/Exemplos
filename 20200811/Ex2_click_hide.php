<!DOCTYPE html>
<html>
    <head>
        <script src="../../jquery-3.5.1.min.js"></script>
        <script>
            $(document).ready(
                function(){ //só executa ao final do carregamento da página
                    $("button").click( //equivalente ao onclick
                        function(){
                            $("table").hide(); //hide oculta mas não volta
                        }
                    );
                }
            );
        </script>
    </head>
    <body>
        <button>Ocultar tabela</button><br>
        <table border="1">
            <tr>
                <th>Coluna 1</th>
                <th>Coluna 2</th>
            </tr>
            <tr>
                <td>Valor 1</td>
                <td>Valor 2</td>
            </tr>
        </table>
    </body>
</html>