<?php
namespace Org_DRC_InterfaceDeGamificacao\Trilha;

use Org_DRC_InterfaceDeGamificacao\Avatar\InsereTexto;
use Org_DRC_InterfaceDeGamificacao\Avatar\InsereVoz;
use Org_DRC_InterfaceDeGamificacao\ChatbotDRC\GeraChatbot;
use Org_DRC_InterfaceDeGamificacao\Classificacao\GeraClassificacao;
use Org_DRC_InterfaceDeGamificacao\Configuracoes\IntegraDefinicoes;
use Org_DRC_InterfaceDeGamificacao\NiveisBarraDeProgresso\GeraBarraDeProgresso;
use Org_DRC_InterfaceDeGamificacao\NiveisBarraDeProgresso\GeraNiveis;

class TrilhaConcreta//class View
{
    private $avatar;
    private $chatbot;
    private $classificacao;
    private $configuracoes;
    private $barraDeProgresso;
    private $niveis;
    
    public function addAvatarTexto(InsereTexto $objAvatarTexto){
        $this->avatar[] = $objAvatarTexto;
    }
    
    public function addAvatarVoz(InsereVoz $objAvatarVoz){
        $this->avatar[] = $objAvatarVoz;
    }
    
    public function addChatbotDRC(GeraChatbot $objChatbot){
        $this->chatbot = $objChatbot;
    }
    
    public function addClassificacao(GeraClassificacao $objClassificacao){
        $this->classificacao = $objClassificacao;
    }
    
    public function addConfiguracoes(IntegraDefinicoes $objDefinicoes){
        $this->configuracoes = $objDefinicoes;
    }
    
    public function addBarraDeProgresso(GeraBarraDeProgresso $objBarraDeProgresso){
        $this->barraDeProgresso = $objBarraDeProgresso;
    }
    
    public function addNiveis(GeraNiveis $objNiveis){
        $this->niveis = $objNiveis;
    }
    
    public function addTrilha(){
        echo '<a href="trilhas.html"><div id="start"></div></a>';
    }
    
    //codigo da parte do MVC - VIEW    
    public function login($validacao) {
        
        if(!isset($validacao)){
            
            /* Exibe o formul�rio de login, onde ser� realizada a requisi��o pelo usu�rio */
            echo '
				<div>
					<h3>Login</h3>
					<form action="index.php?acao=login" method ="post">
						Usu&aacute;rio:
						<input type="text" name="usuario"></br></br>
						Senha:
						<input type="password" name="senha"></br></br>
						<input class="botao" type="reset"  value="Limpar">
						<input class="botao" type="submit" name="submit" value="Logar">
					</form>
				</div>';
        }else{
            
            /* Exibe o resultado da valida��o do login feita pela Model */
            echo '<h3>'.$validacao.'</h3>';
        }
    }
    
    public function geraApp(){
        echo '
                <!doctype html>
                <html>
                <head>
                <meta charset="utf-8">
                <title>Documento sem t�tulo</title>
                <style type="text/css">
                	#start{
                		height:60px;
                		width:20%;
                		/*border:double green;*/
                		position:fixed;
                		top:380px;
                		left:1050px;	
                	}
                	#dificuldade{
                		height:30px;
                		width:20%;
                		/*border:double;*/
                		position:fixed;
                		top:300px;
                		left:1050px;
                	}
                	body{
                		background-image:url(img/telaInicial.png);
                		background-repeat:no-repeat;	
                	}
                </style>
                </head>
                
                <body>
                	<a href="index.php?acao=abrirTrilha"><div id="start"></div></a>
                    <a href="index.php?acao=abrirDificuldade"><div id="dificuldade"></div></a>
                </body>
                </html>
            
        ';
    }
    
    public function abrirTrilha(){
        echo '<!doctype html>
                <html>
                <head>
                <meta charset="utf-8">
                <title>Documento sem t�tulo</title>
                <style type="text/css">
                	#botao1{
                		height:50px;
                		width:4%;
                		/*border:double;*/
                		position:fixed;
                		top:430px;
                		left:120px;	
                	}
                	#botao3{
                		height:50px;
                		width:4%;
                		/*border:double;*/
                		position:fixed;
                		top:650px;
                		left:310px;	
                	}
                	#botao2{
                		height:50px;
                		width:4%;
                		/*border:double;*/
                		position:fixed;
                		top:590px;
                		left:180px;	
                		border-color:green;	
                	}
                	#botao4{
                		height:50px;
                		width:4%;
                		/*border:double;*/
                		position:fixed;
                		top:620px;
                		left:470px;	
                	}
                	#botao5{
                		height:50px;
                		width:4%;
                		/*border:double;*/
                		position:fixed;
                		top:470px;
                		left:570px;	
                	}
                	#botao6{
                		height:50px;
                		width:4%;
                		/*border:double;*/
                		position:fixed;
                		top:460px;
                		left:740px;	
                	}
                	#botao7{
                		height:50px;
                		width:4%;
                		/*border:double;*/
                		position:fixed;
                		top:570px;
                		left:860px;	
                	}
                	body{
                		background-image:url(img/trilhas_grande.png);
                		background-repeat:no-repeat;	
                	}
                </style>
                </head>
                
                <body>
                	<a href="index.php?acao=hemodialise"><div id="botao1"></div></a>
                    <a href="index.php?acao=videosdrc"><div id="botao2"></div></a>
                    <a href="index.php?acao=progresso"><div id="botao3"></div></a>
                    <a href="index.php?acao=usomaquinahemodialise"><div id="botao4"></div></a>
                    <a href="index.php?acao=tiposexames"><div id="botao5"></div></a>
                    <a href="#"><div id="botao6"></div></a>
                    <a href="#"><div id="botao7"></div></a>
                    
                    <a href="progresso.html"><button>Progresso</button></a>
                    <a href="index.html"><button>Voltar</button></a><br><br><br>
                    
                    <img src="img/balao.png">
                </body>
                </html>';
    }
    
    public function definirNivelDeDificuldade(){
        echo '
            <!doctype html>
            <html>
            <head>
            <meta charset="utf-8">
            <title>Documento sem t�tulo</title>
            <style type="text/css">
            	body{
            		background-image:url(img/nivelDIficuldade.png);
            		background-repeat:no-repeat;	
            	}
            	#start{
            		height:60px;
            		width:20%;
            		border:double green;
            		position:fixed;
            		top:380px;
            		left:1050px;	
            	}
            	#ok{
            		height:60px;
            		width:10%;
            		/*border:double blue;*/
            		position:fixed;
            		top:470px;
            		left:500px;	
            	}
            	
            	#cancelar{
            		height:60px;
            		width:10%;
            		/*border:double green;*/
            		position:fixed;
            		top:470px;
            		left:750px;	
            	}
            	</style>
            </head>
            
            <body>
            	<div>
						<h3>Login</h3>
						<form action="index.php?acao=definirDificuldade" method ="get">
							<input type="submit" name="nivelDeDificuldade" value="Confirmar">
						</form>
					</div>
            </body>
            </html>
        ';
    }
    
    public function abrirMissaoHemodialise($configuracoes){
        //$configura��es carrega os dados sobre quais informa��es apresentar sobre hemodi�lise
        echo '
            <!doctype html>
            <html>
            <head>
                <meta charset="utf-8">
                <title>Documento sem t�tulo</title>
            </head>
        
            <body>
                <a href="index.php?acao=progresso"><button>Progresso</button></a>
                <a href="index.php?acao=abrirTrilha"><button>Voltar</button></a><br>
                <img src="img/hemodialise.png">
                <a href="https://forms.gle/xRyyF3i1UK9eqMW99"><button>Iniciar quiz</button></a>
            </body>
            </html>';
    }
    
    public function abrirProgresso(){
        echo '
            <!doctype html>
            <html>
            <head>
            <meta charset="utf-8">
            <title>Documento sem t�tulo</title>
            </head>
            
            <body>
                <a href="index.php?acao=abrirTrilha"><button>Voltar</button></a><br>
            	<img src="img/niveisebarradeprogresso.png">
            </body>
            </html>

        ';
    }
    
    public function usoMaquinaHemodialise(){
        echo '
            <!doctype html>
            <html>
            <head>
            <meta charset="utf-8">
            <title>Documento sem t�tulo</title>
            </head>
            
            <body>
            	<a href="index.php?progresso"><button>Progresso</button></a>
                <a href="index.php?abrirTrilha"><button>Voltar</button></a><br>
            <h1>Como funciona uma maquina de hemodialise</h1>
            <img src="img/hemodialise01.jpg"><br>
            <img src="img/hemodialise02.jpg"><br>
            <img src="img/homedialise03.jpg"><br>
            <img src="img/hemodialose04.png"><br>
            </body>
            </html>';
    }
    
    public function abrirVideosDrc(){
        echo '
            <!doctype html>
            <html>
            <head>
            <meta charset="utf-8">
            <title>Documento sem t�tulo</title>
            </head>
            
            <body>
            	<a href="index.php?progresso"><button>Progresso</button></a>
                <a href="index.php?abrirTrilha"><button>Voltar</button></a><br>
            	<img src="img/videosDCR.png">
            </body>
            </html>
        ';
    }
    
    public function tiposDeExames(){
        echo '
            <!doctype html>
            <html>
            <head>
            <meta charset="utf-8">
            <title>Documento sem t�tulo</title>
            </head>
            
            <body>
            	<a href="index.php?acao=progresso"><button>Progresso</button></a>
                <a href="index.php?acao=abrirTrilha"><button>Voltar</button></a><br>
            	<h1>Tipos de exames para detec��o da DRC</h1>
            	<p>Considerando que doen�a renal cr�nica � a presen�a de altera��es da estrutura ou fun��o
            dos rins por um per�odo maior que 3 meses, conv�m detalhar melhor quais s�o essas altera��es. Alguns exames laboratoriais e de imagem s�o utilizados para investigar a presen�a
            de les�o renal, sendo por isso chamados de marcadores de les�o renal. S�o eles: </p>
             <h2>dosagem da albumin�ria</h2>, 
             <h2>exame de urina </h2>, 
             <h2>dosagem dos eletr�litos no sangue</h2>, 
             <h2>exames de imagem (ultrassom, tomografia, resson�ncia magn�tica, angiografia, cintilografia), </h2>
             <h2>bi�psia e avalia��o da taxa de filtra��o glomerular.</h2> 
             <p>Altera��es em alguns desses exames podem estar
            relacionadas a les�o renal, seja estrutural ou funcional</p>
            </body>
            </html>

        ';
    }
}

