<?php
namespace Org_DRC_ControleDeGamificacao\Motor;

use Org_DRC_ModeloDeGamificacao\LogicaDeGamificacao\LogicaDeNegocio;
use Org_DRC_InterfaceDeGamificacao\Trilha\TrilhaConcreta;
use Org_DRC_ModeloDeGamificacao\EscolhaMelhorTratamento\Hemodialise;

class ControladorM //class Controller
{
        
        public function iniciar() {
            
            /*Inicia a aplicação apresentando na tela a trilha com os desafios e missoes*/
            $view = new TrilhaConcreta();
            $view->geraApp();
        }
        
        public function abrirNivelDeDificuldade(){
            $view = new TrilhaConcreta();
            $view->definirNivelDeDificuldade();
        }
        
        public function definirNivelDeDificuldade($nivelDeDificuldade){
            //retorna para a tela inicial após ter definido o nível de dificuldade      
            $view = new TrilhaConcreta();
            $view->geraApp();
            
            /* Encaminha os dados a Model para que seja realizado a definição do nivel de dificuldade */
            $model = new LogicaDeNegocio();
            $model->defineDificuldade($nivelDeDificuldade);
        }
        
        public function abrirTrilha(){
            $view = new TrilhaConcreta();
            $view->abrirTrilha();
        }
        
        public function abrirMissaoHemodialise(){
            $configuracoes = new Hemodialise();
            $configuracoes->getConfiguracoes();
            $view = new TrilhaConcreta();
            $view->abrirMissaoHemodialise($configuracoes);
        }
        
        public function abrirBarraDeProgresso(){
            $view = new TrilhaConcreta();
            $view->abrirProgresso();
        }
        
        public function abrirVideosDrc(){
            $view = new TrilhaConcreta();
            $view->abrirVideosDrc();
        }
        
        public function usoMaquinaHemodialise(){
            $view = new TrilhaConcreta();
            $view->usoMaquinaHemodialise();
        }
        
        public function tiposDeExames(){
            $view = new TrilhaConcreta();
            $view->tiposDeExames();
        }
}

