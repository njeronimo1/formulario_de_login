<!DOCTYPE html>
<html>
<head>
	<title>Black Sheeps</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

	<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<div class="center">
			<div class="logo">
				<h2>Black Sheeps</h2>
			</div><!--logo-->

			<form method="post" class="form-login">
				<div class="form-element">
					<label>E-mail ou telefone:</label><br>
					<input type="email" name="email">
				</div><!--form-element-->

				<div class="form-element">
					<label>Senha</label><br>
					<input type="password" name="email">
				</div><!--form-element-->

				<div class="form-element">
					
					<input type="submit" name="acao" value="Enviar">
				</div><!--form-element-->
			</form><!--form-login-->
			<div class="clear"></div>	
		</div><!--center-->	
	</header>

	<section class="main">
		<div class="center">
			<div class="img-pessoas">
				<img src="imagem2.png" >
			</div><!--img-pessoas-->

			<div class="abrir-conta">
				<h2>Abra sua conta</h2>
				<h3>Seja um BlackSheep.</h3>

				<form class="criar-conta">
					<div class="w50">
						<input placeholder="Nome" type="text" name="">
					</div><!--w50-->

					<div class="w50">
						<input placeholder="Sobrenome" type="text" name="">
					</div><!--w50-->

					<div class="w100">
						<input placeholder="E-mail" type="email" name="">
					</div><!--100-->

					<div class="w100">
						<input placeholder="Senha" type="password" name="">
					</div><!--100-->

					<div class="w100">
						<h2>Data de Nascimento:</h2>
						 <select name="nascimento-dia" class="nascimento">
						 	<?php
						 		for($i = 1; $i <= 31; $i++){
						 	?>
							<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
							<?php } ?>
						</select>

						<select name="nascimento-mes" class="nascimento">
							
							<option value="1">Janeiro</option>
							<option value="2">Fevereiro</option>
							<option value="3">Março</option>
							<option value="4">Abril</option>
							<option value="5">Maio</option>
							<option value="6">Junho</option>
							<option value="7">Julho</option>
							<option value="8">Agosto</option>
							<option value="9">Setembro</option>
							<option value="10">Outubro</option>
							<option value="11">Novembro</option>
							<option value="12">Dezembro</option>
						</select>

						<select name="nascimento-ano" class="nascimento">
							<?php
						 		for($i = 1950; $i <= 2021; $i++){
						 	?>
							<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
							<?php } ?>
						</select>
						<div class="clear"></div><!--clear-->
					</div><!--w100-->

					<div class="w100">
						<div class="input-radio">
							
							<input type="radio" value="masculino" name="sexo">
							<h2>Masculino</h2>
						</div><!--input-radio-->

						<div class="input-radio">
							
							<input type="radio" value="Feminino" name="sexo">
							<h2>Feminino</h2>
						</div><!--input-radio-->
						<div class="clear"></div>
					</div><!--w100-->

					<div class="w100">

						<input type="submit" value="Cadastre-se" name="acao">
					</div><!--w100-->

					<div class="clear"></div>
				</form><!--criar-conta-->

			</div><!--abrir-conta-->

			<div class="clear"></div>
		</div><!--center-->	
	</section><!--main-->

	<section class="slc">
			<div class="texto">
				<p>Olá somos a Black Sheeps, uma empresa que busca conectar todos os dispositivos em seu lar. <br>Buscando informações e te deixando atualizado sobre tudo que rola pela internet.</p><br>
				<br>
			</div><!--direitos-->

				<div class="direitos1">
					<h3>Cerca de</h3>
					<ul>
						<li><a href="#">Sobre nós</a></li>
						<li><a href="#">Estamos contratando!</a></li>
						<li><a href="#">Avaliações</a></li>
						<li><a href="#">Blog</a></li>
					</ul>
				</div><!--direitos1-->

				<div class="direitos2">
				<h3>Ajuda</h3>
				<ul>
					<li><a href="#">Contato</a></li>
					<li><a href="#">Portal do vendedor</a></li>
					<li><a href="#">Planos de assinatura</a></li>
					<li><a href="#">Pagamentos</a></li>
				</ul>
				<div class="clear"></div>
				</div><!--direitos2-->

				<div class="direitos3">
				<h3>Lei e ordem</h3>
				<ul>
					<li><a href="#">Termos de serviço</a></li>
					<li><a href="#">Proteção de dados</a></li>
					<li><a href="#">Cookies</a></li>
				</ul>
				<div class="clear"></div>
				</div><!--direitos3-->

				<div class="direitos4">
				<h3>Redes sociais</h3>
				<ul>
					<li><a href="#">Facebook</a></li>
					<li><a href="#">Instagram</a></li>
					<li><a href="#">Twitter</a></li>
					<li><a href="#">LinkedIn</a></li>
				</ul>
				<div class="clear"></div>

				</div><!--direitos4-->
			

	</section>
	
</body>
</html>

