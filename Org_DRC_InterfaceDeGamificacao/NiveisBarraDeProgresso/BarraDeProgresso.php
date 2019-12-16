<?php
namespace Org_DRC_InterfaceDeGamificacao\NiveisBarraDeProgresso;

class BarraDeProgresso implements GeraBarraDeProgresso
{
    public function GeraBarraDeProgresso()
    {
        /* Gera a barra de progresso */
        echo '
            <!doctype html>
            <html>
            <head>
            <meta charset="utf-8">
            <title>Documento sem título</title>
            </head>
            
            <body>
                <a href="index.php?acao=abrirTrilha"><button>Voltar</button></a><br>
            	<img src="img/niveisebarradeprogresso.png">
            </body>
            </html>

        ';
    }

    
}

