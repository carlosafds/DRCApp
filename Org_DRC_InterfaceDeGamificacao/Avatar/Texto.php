<?php
namespace Org_DRC_InterfaceDeGamificacao\Avatar;

class Texto implements InsereTexto
{
    public function gerarAvatarTexto()
    {
        /* Gera avatar texto */
        echo '
			<div>
				<h3>Avatar Texto</h3>
			</div>';
    }

}

