<!DOCTYPE html>
<html>
    <head>
        <script src="../../jquery-3.5.1.min.js"></script>
        <script>
            $(document).ready(
                function(){ //só executa ao final do carregamento da página
                    $("button.btn_x").click( //equivalente ao onclick
                        function(){ //O x é para utilizar as classes
                            $(".testes_x").hide(); //hide oculta mas não volta
                        }
                    );
                    $("button.btn_y").click(
                        function(){
                            $(".testes_y").hide();
                        }
                    );
                    $("button.btn_z").click(
                        function(){
                            $("div.testes_y").hide();
                        }
                    );
                }
            );
        </script>
    </head>
    <body>
        <p class="testes_x">Parágrafo 1 - Teste X</p>
        <p class="testes_x">Parágrafo 2 - Teste X</p>
        <div class="testes_y">Div 1 Testes Y</div>
        <div class="testes_y">Div 2 Testes Y</div>
        <span class="testes_y">Span 1 Testes Y</span>
        <span class="testes_y">Span 2 Testes Y</span>
        <img src="#" class="testes_y"><hr/>
        <button class="btn_x">Botão 1 X</button>
        <button class="btn_z">Botão 2 Z</button>
        <button class="btn_y">Botão 3 Y</button> 
    <body>
</html>