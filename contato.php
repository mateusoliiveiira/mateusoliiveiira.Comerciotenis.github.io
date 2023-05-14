<!DOCTYPE html>
<link rel="stylesheet" href="todoscss/contato.css">
<link rel="shortcut icon" href="imagens/favicon-32x32.png" type="image/x-icon">
<html>
  <head>
    <title>Página de Contato</title>
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
                
<a href="index.php">
  <button class="glow-on-hover">Home</button>
</a>         
<a href="paginaprodutos.php">
  <button class="glow-on-hover">Produtos</button>
</a>

   
			</ul>
		</nav>
	</header>

<br>








    <style>
/* Estilos para o formulário de contato */
form {
  max-width: 500px;
  margin: 0 auto;
  text-align: center;
}
label {
  display: block;
  margin-bottom: 10px;
  font-weight: bold;
}
input, textarea {
  padding: 10px;
  margin-bottom: 20px;
  width: 100%;
  box-sizing: border-box;
  border-radius: 5px;
  border: 1px solid #ccc;
}
input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  cursor: pointer;
  border: none;
  border-radius: 5px;
  padding: 10px 20px;
}
input[type="submit"]:hover {
  background-color: #3e8e41;
}

/* Estilos para o cabeçalho e título */

h1 {
  margin: 0;
  text-align: center;
  font-size: 2rem;
  padding-top: 30px;
}

        </style>
    <h1>Entre em Contato Conosco</h1>
    <form method="post" action="enviar_email.php">
      <label for="nome">Nome:</label>
      <input type="text" id="nome" name="nome" required><br>
      <label for="email">E-mail:</label>
      <input type="email" id="email" name="email" required><br>
      <label for="mensagem">Mensagem:</label>
      <textarea id="mensagem" name="mensagem" required></textarea><br>
      <input type="submit" value="Enviar">
    </form>
  </body>
</html>

        <!----Footer--->
        <footer>
		<p>Todos os direitos reservados.</p>
	</footer>