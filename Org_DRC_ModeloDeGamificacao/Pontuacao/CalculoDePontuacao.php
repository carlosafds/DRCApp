<?php
namespace Org_DRC_ModeloDeGamificacao\Pontuacao;

use Org_DRC_ModeloDeGamificacao\DesafiosMissoes\Desafios;
use Org_DRC_ModeloDeGamificacao\DesafiosMissoes\Missoes;

class CalculoDePontuacao implements GeraPontuacao
{
    private $pontuacao;
    private $quantidadeAtividadesComExito;
    private $quantidadeAtividadesIncompletas;
    private $quantidadeAtividadesAbandonadas;
    private $desafios;
    private $missoes;
    
    public function __construct(){
        $this->desafios = new Desafios();
        $this->missoes = new Missoes();
        $this->pontuacao = 0;
        $this->quantidadeAtividadesComExito = 0;
        $this->quantidadeAtividadesIncompletas = 0;
        $this->quantidadeAtividadesAbandonadas = 0;
    }
    
    public function somaAtividadeComExito(){
        $this->pontuacao = $this->pontuacao+3;
        $this->quantidadeAtividadesComExito++;
    }
    
    public function somaAtividadeIncompleta(){
        $this->pontuacao = $this->pontuacao+1;
        $this->quantidadeAtividadesIncompletas++;
    }
    
    public function registroAtividadeAbandonada(){
        $this->quantidadeAtividadesAbandonadas++;
    }
    
    public function getPontuacao(){
        return $this->pontuacao;
    }
}

