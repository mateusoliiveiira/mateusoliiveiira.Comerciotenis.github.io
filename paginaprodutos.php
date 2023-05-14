

<!DOCTYPE html>
<html>
<head>
	<title>Página Inicial</title>
	<link rel="stylesheet" type="text/css" href="todoscss/todosprodutos.css">
  <link rel="shortcut icon" href="imagens/favicon-32x32.png" type="image/x-icon">
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
<a href="contato.php">
  <button class="glow-on-hover">Contato</button>
</a>

		</nav>
	</header>
<br>

<h2>Sessão Da Nike</h2>
  <!--- Tipo 1 Outro tipo de Tenis---->
<div class="item">
  <img src="imagens/Nike revolution m.jpg" alt="Niker Revolutin Masculino">
  <h3>Niker Revolutin Masculino</h3>
  <p>R$ 300,00</p>
  <a href="1TenisREVOLUTION.PHP" style="background-color: #F90EE7; border: none; color: white; padding: 6px 24px; text-align: center; text-decoration: none; display: inline-block; font-size: 13px; border-radius: 4px; cursor: pointer;">Adicionar ao carrinho</a>
</div>
  <!---Tipo 2 Outro tipo de Tenis---->
<div class="item">
  <img src="imagens/tenis nike flt bylow.jpg" alt="Niker flt Byl low">
  <h3>Niker flt Byl low</h3>
  <p>R$ 270,00</p>
  <a href="3TenisFLTBY-LOW.PHP" style="background-color: #F90EE7; border: none; color: white; padding: 6px 24px; text-align: center; text-decoration: none; display: inline-block; font-size: 13px; border-radius: 4px; cursor: pointer;">Adicionar ao carrinho</a>
</div>
  <!--- Tipo 3 Outro tipo de Tenis---->
<div class="item">
  <img src="imagens/Tenis niket starrunner f.jpg" alt="Niker star runner Masculino">
  <h3>Niker star runner Masculino</h3>
  <p>R$ 390,90</p>
  <a href="2Tenis-Starruner.php" style="background-color: #F90EE7; border: none; color: white; padding: 6px 24px; text-align: center; text-decoration: none; display: inline-block; font-size: 13px; border-radius: 4px; cursor: pointer;">Adicionar ao carrinho</a>
</div>
  <!--- Tipo 4 Outro tipo de Tenis---->
<div class="item">
  <img src="imagens/Tenis Nike Air Max Supreme2.jpg" alt="Air Max Supreme2">
  <h3>Air Max Supreme2</h3>
  <p>R$ 770,00</p>
  <a href="5tTenis-Air-Max-Supreme2.php" style="background-color: #F90EE7; border: none; color: white; padding: 6px 24px; text-align: center; text-decoration: none; display: inline-block; font-size: 13px; border-radius: 4px; cursor: pointer;">Adicionar ao carrinho</a>
</div>

<!--- Tipo 5 Outro tipo de Tenis---->
<div class="item">
  <img src="imagens/Tenis Nike Court Vision.jpg" alt="Niker star runner Masculino">
  <h3>Court Vision</h3>
  <p>R$ 480,90</p>
  <a href="4tenis-Court Vision.php" style="background-color: #F90EE7; border: none; color: white; padding: 6px 24px; text-align: center; text-decoration: none; display: inline-block; font-size: 13px; border-radius: 4px; cursor: pointer;">Adicionar ao carrinho</a>
</div>

<!--- Tipo 6 Outro tipo de Tenis---->
<div class="item">
  <img src="imagens/Tenis Nike Air Max Axis.jpg" alt="Air Max AXIS">
  <h3>Air Max AXIS</h3>
  <p>R$ 1090,99</p>
  <a href="6 Tenis Air Max AXIS.php" style="background-color: #F90EE7; border: none; color: white; padding: 6px 24px; text-align: center; text-decoration: none; display: inline-block; font-size: 13px; border-radius: 4px; cursor: pointer;">Adicionar ao carrinho</a>
</div>


<br>

<h2>Sessão Da Adidas</h2>

 <!--- Tipo 7 Outro tipo de Tenis---->
 <div class="item">
  <img src="imagens-adidas/Tenis Adidas Cosmic 2.webp" alt="Adidas Cosmic2">
  <h3>Adidas Cosmic2</h3>
  <p>R$ 150,00</p>
  <a href="7Adidas-Cosmic2.php" style="background-color: #F90EE7; border: none; color: white; padding: 6px 24px; text-align: center; text-decoration: none; display: inline-block; font-size: 13px; border-radius: 4px; cursor: pointer;">Adicionar ao carrinho</a>
</div>

 <!--- Tipo 8 Outro tipo de Tenis---->
 <div class="item">
  <img src="imagens-adidas/Tenis Adidas Alphabounce Beyond.jpg" alt="Adidas Alphabounce Beyond">
  <h3>Adidas Alphabounce Beyond</h3>
  <p>R$ 860,00</p>
  <a href="8Adidas-Alphabounce Beyond.php" style="background-color: #F90EE7; border: none; color: white; padding: 6px 24px; text-align: center; text-decoration: none; display: inline-block; font-size: 13px; border-radius: 4px; cursor: pointer;">Adicionar ao carrinho</a>
</div>

 <!--- Tipo 9 Outro tipo de Tenis---->
 <div class="item">
  <img src="imagens-adidas/Tenis Adidas Coutsmash.jpg" alt="Adidas Coutsmash">
  <h3>Adidas Coutsmash</h3>
  <p>R$ 799,99</p>
  <a href="9Adidas Coutsmash.php" style="background-color: #F90EE7; border: none; color: white; padding: 6px 24px; text-align: center; text-decoration: none; display: inline-block; font-size: 13px; border-radius: 4px; cursor: pointer;">Adicionar ao carrinho</a>
</div>

 <!--- Tipo 10 Outro tipo de Tenis---->
 <div class="item">
  <img src="imagens-adidas/Tenis Adidas SenseBounce.jpg" alt="Adidas SenseBounce">
  <h3>Adidas SenseBounce</h3>
  <p>R$ 500,00</p>
  <a href="10Adidas SenseBounce.php" style="background-color: #F90EE7; border: none; color: white; padding: 6px 24px; text-align: center; text-decoration: none; display: inline-block; font-size: 13px; border-radius: 4px; cursor: pointer;">Adicionar ao carrinho</a>
</div>

 <!--- Tipo 11 Outro tipo de Tenis---->
 <div class="item">
  <img src="imagens-adidas/Tenis Adidas Springblade 2.jpg" alt="Adidas SpringBlade 2">
  <h3>Adidas SpringBlade 2</h3>
  <p>R$ 600,00</p>
  <a href="11Adidas SpringBlade 2.php" style="background-color: #F90EE7; border: none; color: white; padding: 6px 24px; text-align: center; text-decoration: none; display: inline-block; font-size: 13px; border-radius: 4px; cursor: pointer;">Adicionar ao carrinho</a>
</div>
 <!--- Tipo 12 Outro tipo de Tenis---->
 <div class="item">
  <img src="imagens-adidas/Tenis Adidas Cano Alto Streetfire.jpg" alt="Adidas SpringBlade 2">
  <h3>Tenis Adidas Ultimashow</h3>
  <p>R$ 2500,00</p>
  <a href="12Tenis Adidas Cano Alto.php" style="background-color: #F90EE7; border: none; color: white; padding: 6px 24px; text-align: center; text-decoration: none; display: inline-block; font-size: 13px; border-radius: 4px; cursor: pointer;">Adicionar ao carrinho</a>
</div>







        <!----Footer--->
        <footer>
		<p>Todos os direitos reservados.</p>
	</footer>
</body>
</html>
 