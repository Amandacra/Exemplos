<!DOCTYPE html>
<html>
    <head>
        <script src="jquery-3.5.1.min.js"></script>
        <script>
            $(document).ready(
                function(){ //só executa ao final do carregamento da página
                    $("button").click( //equivalente ao onclick
                        function(){ //O # é para utilizar os ids
                            $("#teste").hide(); //hide oculta mas não volta
                        }
                    );
                }
            );
        </script>
    </head>
    <body>
        <h2>Cabeçalho (não vai ser alterado)</h2><br>
        <p>Paragrafo 1 (vai sumir)</p>
        <p id="teste">Paragráfo 2 (vai sumir também)</p>
        <button>Clique aqui para esconder os parágrafos de id</button>
    <body>
</html>