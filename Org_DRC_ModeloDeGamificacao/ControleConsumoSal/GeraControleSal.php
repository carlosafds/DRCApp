<?php
namespace Org_DRC_ModeloDeGamificacao\ControleConsumoSal;

interface GeraControleSal
{
    public function definirMetaDeConsumoDiario();
    public function definirMetaDeExercicioDiario();
    public function inserirDadosDeAlimentacao();
    public function calcularQuantidadeDeSodio();
    public function definirMetaDePeso();
}

