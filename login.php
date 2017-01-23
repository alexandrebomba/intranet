
<html>
    <head>
        <meta charset="utf-8">
        <title>AmxSolutions | Soluções Tecnológicas</title>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'><!--Font importada do google -->
        <link rel="stylesheet" href="css/login.css" />
        <link rel="icon"  type="image/png" sizes="16x16" href="favicon.png">
        
    </head>
    <body>
        <div class="form-wrapper">
            
            <form action="" method="post">
                <h3>Acesse sua conta</h3>
                <div class="form-item">
                    <input type="text" name="usuario" required="required" placeholder="Usuário" autofocus><!-- autofocus é pra o atributo receber o foco automaticamente quando a pagina é carregada-->
                </div >
                
                <div class="form-item">
                    <input type="password" name="senha" required="required" placeholder="Senha">
                </div>    
                
                <div class="button-panel">
                    <input type="submit" class="button" title="Entrar" value="Entrar">
                </div>
                
            </form>
            <div class="reminder">
                 <!--<p>Não é um membro? <a href="#">Cadastre-se</a></p>-->
                 <p><a href="#">Esqueceu a senha?</a></p>
                
            </div>    
            
            <?php
            require 'config.php';
            
            if($_POST){
                $usuario = $_POST['usuario'];//Cria variave usuário e senha para consultar no banco
                $senha = $_POST['senha'];
                
                $query = "SELECT * FROM usuarios WHERE usuario = '$usuario' and senha = '$senha' "; //busca o usuário no banco
                
                $result = mysql_query($query);
                $usuario = mysql_fetch_assoc($result);
                
                if($usuario){
                    session_start();//inicia a sessão
                    $_SESSION['logado'] = true;
                    $_SESSION['usuario'] = $usuario['nome'];
                    header('location:index.php');
                }  else {
                    echo '<h1>Usuário não cadastrado</h1>';
                    
                }
            }
            
            ?>
            
        </div>
    </body>
        
    
    
    
    
</html>