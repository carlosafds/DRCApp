<?php
namespace Org_DRC_ControleDeGamificacao\ControleEstagio5;

use Org_DRC_ModeloDeGamificacao\EscolhaMelhorTratamento\Hemodialise;
use Org_DRC_ModeloDeGamificacao\EscolhaMelhorTratamento\DialisePeritoneal;

class Controlador5
{
    private $hemodialise;
    private $dialisePeritoneal;
    
    public function __construct(){
        $this->hemodialise = new Hemodialise();
        $this->dialisePeritoneal = new DialisePeritoneal();
    }
    
    public function informaSobreHemodialise(){
        
    }
}

