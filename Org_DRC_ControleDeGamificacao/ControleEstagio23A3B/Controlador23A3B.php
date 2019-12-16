<?php
namespace Org_DRC_ControleDeGamificacao\ControleEstagio23A3B;

use Org_DRC_ModeloDeGamificacao\ControleConsumoSal\ControleDoSal;

class Controlador23A3B implements ConfiguraControle23A3B
{
    private $controleSal;
    
    public function __construct(){
        $this->controleSal = new ControleDoSal();
    }
    
    public function informaSobreHemodialise(){
        echo "informa";
    }
    
    
}

