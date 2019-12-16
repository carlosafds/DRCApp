<?php
namespace Org_DRC_ControleDeGamificacao\Motor;

use Org_DRC_ModeloDeGamificacao\LogicaDeGamificacao\LogicaDeNegocio;
use Org_DRC_InterfaceDeGamificacao\Trilha\TrilhaConcreta;
use Org_DRC_ModeloDeGamificacao\EscolhaMelhorTratamento\Hemodialise;
use Org_DRC_ControleDeGamificacao\ControleEstagio1\Controlador1;
use Org_DRC_ControleDeGamificacao\ModuloIntegrador\Integrador;

class ControladorM //class Controller
{
        private $model;
        private $view;
        private $controleTipoDRC;
        private $integrador;
        
        function __construct(){
            $this->model = new LogicaDeNegocio();
            $this->view = new TrilhaConcreta();
            $this->controleTipoDRC = new Controlador1();
            $this->integrador = new Integrador();
        }
        
        public function iniciar() {
            /*Inicia a aplicação apresentando na tela a trilha com os desafios e missoes*/
            $this->view->geraApp();
        }
        
        public function abrirNivelDeDificuldade(){
            $this->view->definirNivelDeDificuldade();
        }
        
        public function definirNivelDeDificuldade($nivelDeDificuldade){
            //retorna para a tela inicial após ter definido o nível de dificuldade      
            $this->view->geraApp();
            
            /* Encaminha os dados a Model para que seja realizado a definição do nivel de dificuldade */
            $this->model->defineDificuldade($nivelDeDificuldade);
        }
        
        public function abrirTrilha(){
            $this->view->abrirTrilha();
        }
        
        public function abrirMissaoHemodialise(){
            $this->controleTipoDRC->hemodialise();
            $configuracoes = $this->model->getHemodialise();
            $this->view->abrirMissaoHemodialise($configuracoes);
        }
        
        public function abrirBarraDeProgresso(){
            $pontuacaoAtual = $model->getPontuacaoAtual();
            $this->view->abrirProgresso($pontuacaoAtual);
        }
        
        public function abrirVideosDrc(){
            $this->view->abrirVideosDrc();
        }
        
        public function usoMaquinaHemodialise(){
            $this->view->usoMaquinaHemodialise();
        }
        
        public function tiposDeExames(){
            $this->model->addPlanoDeTratamento(1);
            $tiposDeExame = $this->model->getTipoDeExame();
            $this->view->tiposDeExames($tiposDeExame);
        }
}

