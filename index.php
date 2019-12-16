<?php
use Org_DRC_ControleDeGamificacao\Motor\ControladorM;
use Org_DRC_InterfaceDeGamificacao\Trilha\TrilhaConcreta;


$acao = $_GET['acao'];

/* Valida a aзгo passada e verifica se ela existe.*/

if(isset($acao)){
    /* Pega a aзгo passada pela URL*/
    
    switch ($acao){
        //Vai para a tela inicial da aplicaзгo
        case 'iniciar':
            $controller = new ControladorM();
            $controller->iniciar();
            break;
       //vai para a tela onde й apresentada a trilha com os desafios e missoes
       case 'abrirTrilha':
           $controller = new ControladorM();
           $controller->abrirTrilha();
           break;
       //abre a tela onde o usuбrio pode determinar o nнvel de dificuldade
       case 'abrirDificuldade':
           $controller = new ControladorM();
           $controller->abrirNivelDeDificuldade();
           break;
       case 'definirDificuldade':
           $nivelDeDificuldade = $_GET['nivelDeDificuldade'];
           $controller = new ControladorM();
           $controller->definirNivelDeDificuldade($nivelDeDificuldade);
           break;
       case 'hemodialise':
           $controller = new ControladorM();
           $controller->abrirMissaoHemodialise();
           break;
       case 'progresso':
           $controller = new ControladorM();
           $controller->abrirBarraDeProgresso();
           break;
       case 'videosdrc':
           $controller = new ControladorM();
           $controller->abrirVideosDrc();
           break;
       case 'usomaquinahemodialise':
           $controller = new ControladorM();
           $controller->usoMaquinaHemodialise();
           break;
       case 'tiposexames':
           $controller = new ControladorM();
           $controller->tiposDeExames();
           break;
           
    }
    
}else{
   $view = new TrilhaConcreta();
   $view->geraApp();
}
?>