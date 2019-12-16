<?php
use Org_DRC_ControleDeGamificacao\Motor\ControladorM;
use Org_DRC_InterfaceDeGamificacao\Trilha\TrilhaConcreta;


/* Pega a a��o passada pela URL*/
$acao = $_GET['acao'];

/* Valida a a��o passada, verifica se ela existe e se ela e o login
 * Se a a��o for exisir e for login inicia a fun��o login do Controller
 * Se n�o inicia a fun��o login da View*/
if(isset($acao)){
    switch (acao){
        //Vai para a tela inicial da aplica��o
        case 'iniciar':
            $controller = new ControladorM();
            $controller->iniciar();
            break;
       //vai para a tela onde � apresentada a trilha com os desafios e missoes
       case 'abrirTrilha':
           $controller = new ControladorM();
           $controller->abrirTrilha();
           break;
       //abre a tela onde o usu�rio pode determinar o n�vel de dificuldade
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