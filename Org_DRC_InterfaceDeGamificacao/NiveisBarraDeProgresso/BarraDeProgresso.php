<?php
namespace Org_DRC_InterfaceDeGamificacao\NiveisBarraDeProgresso;

class BarraDeProgresso implements GeraBarraDeProgresso
{
    public function GeraBarraDeProgresso()
    {
        /* Gera a barra de progresso */
        echo '
				<div>
					<h3>BarraDeProgresso</h3>
				</div>';
    }

    
}

