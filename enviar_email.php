<!DOCTYPE html>
<link rel="shortcut icon" href="imagens/favicon-32x32.png" type="image/x-icon">
<html>
  <head>
    <title>Página de Contato</title>
    <link rel="stylesheet" href="todoscss/enviar.css">
  </head>
  <body>
  <!--Cabecalho nome--->
  <header>  
  <img class="bane" src="imagens/STYLE GRIFF.png"width="100%" height="200px" alt="100%" >   
		
		<nav>
 


        <!--CSS DOS BUTOES-->
        <style>
.glow-on-hover {
    width: 220px;
    height: 50px;
    border: none;
    outline: none;
    color: #fff;
    background: #111;
    cursor: pointer;
    position: relative;
    z-index: 0;
    border-radius: 10px;
    padding: 90px 0px 30px 20 ;
   

}
.glow-on-hover:before {
    content: '';
    background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
    position: absolute;
    top: -2px;
    left:-2px;
    background-size: 400%;
    z-index: -1;
    filter: blur(5px);
    width: calc(100% + 4px);
    height: calc(100% + 4px);
    animation: glowing 20s linear infinite;
    opacity: 0;
    transition: opacity .3s ease-in-out;
    border-radius: 10px;
}

.glow-on-hover:active {
    color: #000
}

.glow-on-hover:active:after {
    background: transparent;  
}

.glow-on-hover:hover:before {
    opacity: 1;
}
.glow-on-hover:after {
    z-index: -1;
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background: #000000;
    left: 0;
    top: 0;
    border-radius:10px;
    
}

@keyframes glowing {
    0% { background-position: 0 0; }
    50% { background-position: 400% 0; }
    100% { background-position: 0 0; }
}
    </style>
			<ul>
            <button class="glow-on-hover"   li><a href="Index.php">Home</a></li>
		 
			</ul>
		</nav>
	</header>
<br>  
<br>  
<br>
<br>
<br>

 
    <?php
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $mensagem = $_POST['mensagem'];

        // aqui você pode adicionar o código para enviar um e-mail com as informações recebidas

        echo '<div class="success">Obrigado por entrar em contato, '.$nome.'! Sua mensagem foi recebida.</div>';
      }
    ?>
     
  </body>
</html>
