<?php
namespace Org_DRC_ModeloDeGamificacao\LogicaDeGamificacao;

use Org_DRC_ModeloDeGamificacao\ControleConsumoSal\ControleDoSal;
use Org_DRC_ModeloDeGamificacao\PlanoDeTratamento\DRCEstagio1;
use Org_DRC_ModeloDeGamificacao\PlanoDeTratamento\DRCEstagio23A3B;
use Org_DRC_ModeloDeGamificacao\PlanoDeTratamento\DRCEstagio4;
use Org_DRC_ModeloDeGamificacao\PlanoDeTratamento\DRCEstagio5;
use Org_DRC_ModeloDeGamificacao\DesafiosMissoes\GeraDesafios;
use Org_DRC_ModeloDeGamificacao\DesafiosMissoes\GeraMissoes;
use Org_DRC_ModeloDeGamificacao\ControleConsumoSal\GeraControleSal;
use Org_DRC_ModeloDeGamificacao\EscolhaMelhorTratamento\GeraHemodialise;
use Org_DRC_ModeloDeGamificacao\EscolhaMelhorTratamento\GeraPeritoneal;
use Org_DRC_ModeloDeGamificacao\Pontuacao\GeraPontuacao;
use Org_DRC_ModeloDeGamificacao\Pontuacao\CalculoDePontuacao;
use Org_DRC_ModeloDeGamificacao\EscolhaMelhorTratamento\Hemodialise;

class LogicaDeNegocio implements GeraLogica
{
    private $planoDeTratamento;
    private $controleSal;
    private $desafios;
    private $missoes;
    private $escolhaMelhorTratamento;
    private $peritoneal;
    private $pontuacao;
    private $nivelDeDificuldade;
    private $hemodialise;
    
    function __construct(){
        $this->pontuacao = new CalculoDePontuacao();
        $this->hemodialise = new Hemodialise();
    }
    
    public function addPlanoDeTratamento(int $tipoDePlano){
        switch ($tipoDePlano){
            case 1:
                $this->planoDeTratamento = new DRCEstagio1();
                break;
            case 2:
                $this->planoDeTratamento = new DRCEstagio23A3B();
                break;
            case 3:
                $this->planoDeTratamento = new DRCEstagio4();
                break;
            case 4:
                $this->planoDeTratamento = new DRCEstagio5();
                break;
               
        }
    }
    
    public function defineDificuldade(int $nivelDeDificuldade){
        $this->nivelDeDificuldade = $nivelDeDificuldade;
    }
    
    public function getPontuacaoAtual(){
        return $this->pontuacao->getPontuacao(); 
    }
    
    public function getHemodialise(){
        return $this->hemodialise;
    }
    
    public function getTipoDeExames(){
        
    }
}

