<?php
namespace Org_DRC_ModeloDeGamificacao\Pontuacao;

interface GeraPontuacao
{
    public function somaAtividadeComExito();
    public function somaAtividadeIncompleta();
    public function registroAtividadeAbandonada();
    public function getPontuacao();
}

