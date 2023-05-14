<!DOCTYPE html>
<html>
<head>
	<title>Página de pagamento</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f2f2f2;
			margin: 0;
			padding: 0;
		}
		form {
			background-color: #fff;
			max-width: 500px;
			margin: 20px auto;
			padding: 20px;
			box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
			border-radius: 4px;
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
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
			margin-bottom: 10px;
			font-size: 16px;
			font-family: Arial, sans-serif;
		}
		input[type="radio"] {
			margin-right: 10px;
		}
		input[type="submit"] {
			background-color: #007bff;
			color: #fff;
			padding: 10px 20px;
			border: none;
			border-radius: 4px;
			font-size: 16px;
			cursor: pointer;
		}
		input[type="submit"]:hover {
			background-color: #0066cc;
		}
	</style>
</head>
<body>
	<form method="post" action="processar_pagamento.php">
		<label for="nome">Nome Completo:</label>
		<input type="text" name="nome" required>
		<label for="email">E-mail:</label>
		<input type="email" name="email" required>
		<label for="forma_pagamento">Forma de Pagamento:</label>
		<input type="radio" name="forma_pagamento" value="Pix" required> Pix
		<input type="radio" name="forma_pagamento" value="boleto_bancario"> Boleto Bancário
		<label for="valor">Valor:</label>
		<input type="number" name="valor" required>
		<input type="submit" value="Pagar">
	</form>
</body>
</html>
