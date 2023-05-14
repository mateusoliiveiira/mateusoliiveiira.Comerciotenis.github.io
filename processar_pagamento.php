
<style>
form {
max-width: 500px;
margin: 0 auto;
padding: 20px;
background-color: #f9f9f9;
border-radius: 5px;
box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
}

label {
display: block;
margin-bottom: 5px;
}

input[type="text"],
input[type="email"],
input[type="number"] {
display: block;
width: 100%;
padding: 10px;
border-radius: 5px;
border: none;
margin-bottom: 20px;
box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
}

input[type="radio"] {
margin-right: 5px;
}

input[type="submit"] {
background-color: #007bff;
color: #fff;
padding: 10px 20px;
border: none;
border-radius: 5px;
cursor: pointer;
}

input[type="submit"]:hover {
background-color: #0069d9;
}

/* Estilo para mensagens de erro */
.mensagem-erro {
color: #ff0000;
font-weight: bold;
margin-bottom: 20px;
}

    </style>
<?php

// Verifica se os dados foram enviados via POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	// Define os dados de acesso à plataforma de pagamento
	$chave_api = 'sua_chave_api';
	$senha_api = 'sua_senha_api';

	// Define os dados do pagamento
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$valor = $_POST['valor'];
	$forma_pagamento = $_POST['forma_pagamento'];

	// Conecta com a plataforma de pagamento e envia os dados
	$url_api = 'https://sua_plataforma_de_pagamento.com.br/api/pagamento';
	$dados_pagamento = array(
		'chave_api' => $chave_api,
		'senha_api' => $senha_api,
		'nome' => $nome,
		'email' => $email,
		'valor' => $valor,
		'forma_pagamento' => $forma_pagamento
	);
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $url_api);
	curl_setopt($curl, CURLOPT_POST, true);
	curl_setopt($curl, CURLOPT_POSTFIELDS, $dados_pagamento);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	$resposta_api = curl_exec($curl);
	curl_close($curl);

	// Verifica se o pagamento foi aprovado
	if ($resposta_api == 'Pagamento aprovado') {
		echo 'O seu pagamento foi aprovado. Obrigado!';
	} else {
		echo 'Ocorreu um erro ao processar o seu pagamento.';
	}

} else {

	// Se os dados não foram enviados via POST, redireciona para a página de pagamento
	header('Location: pagina_de_pagamento.html');
	exit;

}
