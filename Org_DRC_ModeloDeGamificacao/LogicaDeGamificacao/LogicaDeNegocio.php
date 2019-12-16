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
    
    function __construct(){
        
    }
    
    public function addPlanoDeTratamento($tipoDePlano){
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
    
    public function addControleSal(GeraControleSal $objControleSal){
        $this->controleSal = $objControleSal;
    }
    
    public function addDesafios(GeraDesafios $objDesafio){
        $this->desafios[] = $objDesafio;
    }
    public function addMissoes(GeraMissoes $objMissao){
        $this->missoes = $objMissao;
    }
    
    public function addHemodialise(GeraHemodialise $objHemodialise){
        $this->hemodialise = $objHemodialise;
    }
    
    public function addDialisePeritoneal(GeraPeritoneal $objPeritoneal){
        $this->peritoneal = $objPeritoneal;
    }
    
    public function addPontuacao(GeraPontuacao $objPontuacao){
        $this->pontuacao = $objPontuacao;
    }
    
    public function validaDados($usuario,$senha) {
        
        /* Aplica a validação ao usuário e senha passados, utilizando as regras de négocio especificas para ele. */
        if(strlen($usuario)<5){
            
            return 'Digite o usu&aacute;rio corretamente';
            
        }else if(strlen($senha)<8){
            
            return 'A senha deve possuir mais de 8 caracteres';
            
        }else{
            
            return 'Login efetuado com sucesso';
            
        }
    }
    
    public function defineDificuldade($nivelDeDificuldade){
        $this->nivelDeDificuldade = $nivelDeDificuldade;
    }
}

