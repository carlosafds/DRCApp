<?php
namespace Org_DRC_ModeloDeGamificacao\EscolhaMelhorTratamento;

class Hemodialise implements GeraHemodialise
{
    private $configuracoes;
    public function gerarInstrucoes(){
        $this->configuracoes[] = "instrucoes";   
    }
    
    public function gerarVideos(){
        $this->configuracoes[] = "videos";
    }
    
    public function gerarTabuleiro(){
        $this->configuracoes[] = "gerarTabuleiro";
    }
    
    public function gerarRegras(){
        $this->configuracoes[] = "regras";
    }
    
    public function getConfiguracoes(){
        $this->gerarInstrucoes();
        $this->gerarVideos();
        $this->gerarRegras();
        $this->gerarTabuleiro();
        return $this->configuracoes;
    }
}

