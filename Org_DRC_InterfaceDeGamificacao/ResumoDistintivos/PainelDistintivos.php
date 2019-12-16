<?php
namespace Org_DRC_InterfaceDeGamificacao\ResumoDistintivos;

class PainelDistintivos implements GeraDistintivos
{
    public function geraPainelDistintivos()
    {
        /* Gera o painel de distintivos */
        echo '
				<div>
					<h3>PainelDistintivos</h3>
				</div>';
    }

}

