

<!DOCTYPE html>
<html>
<head>
	<title>STYLE GRIFF</title>
	<link rel="stylesheet" type="text/css" href="todoscss/style.css">
    <link rel="shortcut icon" href="imagens/favicon-32x32.png" type="image/x-icon">
    <link rel="shortcut icon" href="" type="image/x-icon">
 
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
<a href="login.php">
  <button class="glow-on-hover">Login</button>
</a>


			</ul>
		</nav>
   
    <?php
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nome = $_POST['nome'];
       

        // aqui você pode adicionar o código para enviar um e-mail com as informações recebidas

        echo '<div class="success">😎 Seja Bem Vindo, '.$nome.'!  A Maior Loja de tenis do Brasil.</div>';
      }
    ?>

 <!----Texto Passando--->
 <div class="marquee">
  
    <marquee behavior="scroll" direction="left">
     
    ✡ 𝙲𝚘𝚗𝚏𝚒𝚛𝚊 𝚊𝚜 𝚗𝚘𝚜𝚜𝚊𝚜 𝚙𝚛𝚘𝚖𝚘𝚌̧𝚘̃𝚎𝚜 𝚎𝚖 𝚝𝚎̂𝚗𝚒𝚜! 𝙳𝚎𝚜𝚌𝚘𝚗𝚝𝚘𝚜 𝚍𝚎 𝚊𝚝𝚎́ 𝟻𝟶% 𝚎𝚖 𝚍𝚒𝚟𝚎𝚛𝚜𝚘𝚜 𝚖𝚘𝚍𝚎𝚕𝚘𝚜 𝚎 𝚖𝚊𝚛𝚌𝚊𝚜. ✡ 
		</marquee>
</div>

<!---Banner de promoçoes--->
<div class="banner2">
    <a href="6 Tenis Air Max AXIS.php">
        <video width="100%" height="100%" autoplay loop muted>
            <source src="imagens/sTYLE (3).mp4" type="video/mp4">
        </video>
    </a>
</div>

        <!----Footer--->
        <footer>
   
  <div class="footer-container">
    <h2>Sobre a nossa loja de Tênis</h2>
    <p>Somos uma loja especializada em fornecer aos nossos clientes os melhores produtos e serviços relacionados a calçados esportivos. Nós nos dedicamos exclusivamente à venda de tênis e estamos empenhados em oferecer a mais ampla seleção de calçados das principais marcas do mercado.

Na nossa loja, você encontrará uma grande variedade de tênis, incluindo modelos para corrida, caminhada, tênis de quadra, tênis de basquete e muito mais. Nós também oferecemos uma grande variedade de tamanhos, para que você possa encontrar o tênis perfeito que se ajusta ao seu pé de forma confortável.

Nossa equipe é composta por profissionais altamente qualificados e experientes que estão sempre prontos para ajudá-lo a encontrar o tênis perfeito. Se você tiver alguma dúvida ou precisar de ajuda para escolher o tênis certo para você, não hesite em nos contatar. Estamos sempre à disposição para ajudá-lo!</p>
    <ul>
        <style>
.btn {
  border: none;
  font-family: 'Lato';
  font-size: inherit;
  color: inherit;
  background: none;
  cursor: pointer;
  padding: 25px 80px;
  display: inline-block;
  margin: 15px 30px;
  text-transform: uppercase;
  letter-spacing: 1px;
  font-weight: 700;
  outline: none;
  position: relative;
  -webkit-transition: all 0.3s;
  -moz-transition: all 0.3s;
  transition: all 0.3s;
}

.btn:after {
  content: '';
  position: absolute;
  z-index: -1;
  -webkit-transition: all 0.3s;
  -moz-transition: all 0.3s;
  transition: all 0.3s;
}

/* Pseudo elements for icons */
.btn:before {
  font-family: 'FontAwesome';
  speak: none;
  font-style: normal;
  font-weight: normal;
  font-variant: normal;
  text-transform: none;
  line-height: 1;
  position: relative;
  -webkit-font-smoothing: antialiased;
}


/* Icon separator */
.btn-sep {
  padding: 25px 60px 25px 120px;
}

.btn-sep:before {
  background: rgba(0,0,0,0.15);
}

/* Button 1 */
.btn-1 {
  background: #3498db;
  color: #fff;
}

.btn-1:hover {
  background: #2980b9;
}

.btn-1:active {
  background: #2980b9;
  top: 2px;
}

.btn-1:before {
  position: absolute;
  height: 100%;
  left: 0;
  top: 0;
  line-height: 3;
  font-size: 140%;
  width: 60px;
}

/* Button 2 */
.btn-2 {
  background: #2ecc71;
  color: #fff;
}

.btn-2:hover {
  background: #27ae60;
}

.btn-2:active {
  background: #27ae60;
  top: 2px;
}

.btn-2:before {
  position: absolute;
  height: 100%;
  left: 0;
  top: 0;
  line-height: 3;
  font-size: 140%;
  width: 60px;
}

/* Button 3 */
.btn-3 {
  background: #e74c3c;
  color: #fff;
}

.btn-3:hover {
  background: #c0392b;
}

.btn-3:active {
  background: #c0392b;
  top: 2px;
}

.btn-3:before {
  position: absolute;
  height: 100%;
  left: 0;
  top: 0;
  line-height: 3;
  font-size: 140%;
  width: 60px;
}

/* Button 3 */
.btn-4 {
  background: #34495e;
  color: #fff;
}

.btn-4:hover {
  background: #2c3e50;
}

.btn-4:active {
  background: #2c3e50;
  top: 2px;
}

.btn-4:before {
  position: absolute;
  height: 100%;
  left: 0;
  top: 0;
  line-height: 3;
  font-size: 140%;
  width: 60px;
}

/* Icons */

.icon-cart:before {
  content: "\f07a";
}


.icon-heart:before {
  content: "\f16d";
}



  .icon-info:before {
  content: "\f09a";
}



.icon-send:before {
  content: "\f1d8";
}
a:hover {
  transform: scale(1.2);
}



</style>
          <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
<h2>Nossas Redes Socias</h2>
<button class="btn btn-1 btn-sep icon-info">
  <a href="https://www.facebook.com/profile.php?id=100091747943008" target="_blank">Facebook</a>


<button class="btn btn-3 btn-sep icon-heart">Instagram</button>
    <p>© 2023 Todos os direitos reservados.</p>
  </div>
</footer>

</body>
</html>

















</body>
</html>