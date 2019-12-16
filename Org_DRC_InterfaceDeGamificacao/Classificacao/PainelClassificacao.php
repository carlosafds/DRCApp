<?php
namespace Org_DRC_InterfaceDeGamificacao\Classificacao;

class PainelClassificacao implements GeraClassificacao
{
    public function GeraClassificacao()
    {
        /* Gera classificacao */
        echo '
			<div>
				<h3>Classificacao</h3>
			</div>';
        
    }

}

