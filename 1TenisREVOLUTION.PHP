<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagens/favicon-32x32.png" type="image/x-icon">
    <link rel="stylesheet" href="todoscss/Revolution.css">
    <title>Document</title>
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

<main>
    
        <div class="product-info">
            <img src="imagens/Nike revolution m.jpg" alt="Produto X">
            <h2>Tenis Nike Revolution</h2>
            <p>R$ 300,00</p>
            <form action="Pagamento-Revolution.php" method="post">
               
                </select>
                <button type="submit">Comprar agora</button>
            </form>
        </div>
<br>
        <div class="shipping-info">
            <h3>Informações de envio</h3>
            <ul>
                <li>Frete grátis para todo o Brasil</li>
                <li>Prazo de entrega: 7 dias úteis</li>
                <li>Garantia de 30 dias</li>
            </ul>
        </div>

        <div class="payment-info">
            <h3>Formas de pagamento</h3>
            <ul>
                <li>💳Cartão de crédito</li>
                <li>🎫Boleto bancário</li>
                <li>❖Pix</li>
            </ul>
        </div>
        
        
                    <br>
                    <br>
                    <br>
                    
</main>
</header>
 

</body>
<!----Footer--->
<footer>
    
		<p>Todos os direitos reservados.</p>
	</footer>