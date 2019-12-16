<?php
namespace Org_DRC_ModeloDeGamificacao\Pontuacao;

class CalculoDePontuacao implements GeraPontuacao
{
    private $pontuacao = 0;
    private $quantidadeAtividadesComExito = 0;
    private $quantidadeAtividadesIncompletas = 0;
    private $quantidadeAtividadesAbandonadas = 0;
    
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
}

