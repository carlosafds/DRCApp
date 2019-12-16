<?php
namespace Org_DRC_ControleDeGamificacao\ControleEstagio1;

use Org_DRC_ModeloDeGamificacao\DesafiosMissoes\Missoes;

class Controlador1 implements ConfiguraControle1
{
    
    private $missoes;
    
    public function __construct(){
        $this->missoes = new Missoes();
    }
    
    public function informaSobreHemodialise(){
        echo "abrindo missao hemodialise";
    }
}

