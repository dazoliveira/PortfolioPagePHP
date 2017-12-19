<?php 
require_once('functions.php');
add();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Novo Cliente</h2>

<form action="add.php" method="post" onsubmit="">
<!--area dos campos do form-->
<hr />
	<div class="row">	
		<div class="form-group col-md-7">
			<label for="name">Nome / Razão Social</label>
			<input type="text" class="form-control" name="customer['name']" required>				 
		</div>

		<div class="form-group col-md-3">
			<label for="campo2">CNPJ / CPF</label>
			<input type="text" class="form-control" name="customer['cpf_cnpj']" required>	
		</div>

		<div class="form-group col-md-2">
			<label for="campo3">Data de Nascimento</label>
			<input type="text" class="form-control" name="customer['birthdate']" title="ANO-MES-DIA (AAAA-MM-DD)" placeholder="ANO-MES-DIA" pattern="\d{4}-\d{1,2}-\d{1,2}" required>	
			<!--(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31)-(?:(?:0[1-9]|1[0-2])-(?:19|20)[0-9]{2})-->

		</div>

		<div class="form-group col-md-5">
			<label for="campo1">Endereço</label>
			<input type="text" class="form-control" name="customer['address']" required>	
		</div>

		<div class="form-group col-md-3">
			<label for="campo2">Bairro</label>
			<input type="text" class="form-control" name="customer['hood']" required>	
		</div>

		<div class="form-group col-md-2">
			<label for="campo3">CEP</label>
			<input type="number" class="form-control" name="customer['zip_code']" placeholder="apenas números" title="use apenas numeros" required>	
		</div>

		<div class="form-group col-md-2">
			<label for="campo3">Data de Cadastro</label>
			<input type="text" class="form-control" name="customer['created']" disabled>	
		</div>
	</div>


	<div class="row">
		<div class="form-group col-md-3">
			<label for="campo1">Município</label>	
			<input type="text" class="form-control" name="customer['city']" required>
		</div>

		<div class="form-group col-md-1">
			<label for="campo3">UF</label>	
			<input type="text" class="form-control" name="customer['state']" required>
		</div>	


		<div class="form-group col-md-2">
			<label for="campo2">Telefone</label>	
			<input type="number" class="form-control" name="customer['phone']" placeholder="apenas números" required>
		</div>		

		<div class="form-group col-md-2">
			<label for="campo3">Celular</label>	
			<input type="number" class="form-control" name="customer['mobile']" placeholder="apenas números" required>
		</div>	

		<div class="form-group col-md-2">
			<label for="campo3">Inscrição Estadual</label>	
			<input type="number" class="form-control" name="customer['ie']" placeholder="número de registro" required>
		</div>		
	</div>

	<div id="actions" class="row">
		<div class="col-md-12">
			<button type="submit" class="btn btn-primary">Salvar</button>
			<a href="index.php" class="btn btn-default">Cancelar</a> 
		</div>
	</div>
</form>

<?php include(FOOTER_TEMPLATE); ?>	