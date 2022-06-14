<!DOCTYPEHTML>
<html>
<?php include("head.php")?>

<script language="javascript" type="text/javascript">
    function formatarMoeda(){
	var elemento = document.getElementById('preco');
	var valor = preco.value;

	valor = valor+'';
	valor = parseInt(valor.replace(/[\D]+/g,''));
	valor = valor+'';valor=valor.replace(/([0-9]{2})$/g,",$1");
	
	if(valor.length>6){
    	    valor=valor.replace(/([0-9]{3}),([0-9]{2}$)/g,".$1,$2");
	}

	elemento.value = valor;
    }
    
    function validar(formulario){
	var quantidade = form.quantidade.value;	
	var preco = form.preco.value;
	for (i=0;i <= formulario.length-2;i++){
	    if((formulario[i].value=="")){
	        alert("Preenchaocampo"+formulario[i].name);
	        formulario[i].focus();
	        returnfalse;
	    }
	}
	if (quantidade<=0){
	    alert('Aquantidadedepáginasnãopodeserigualouinferiora0');
	    form.quantidade.focus();
	    returnfalse;
	}
	if(preco<=0){
 	    alert('Opreçodolivronãopodeserigualouinfeirora0');
	    form.preco.focus();
	    returnfalse;
	}
	formulario.submit();
    }
</script>

<body>
	<?php include("menu.php")?>

	<div class="row">
	    <form method="post"action="../controller/ControllerCadastro.php"id="form"name="form"onsubmit="validar(document.form);returnfalse;"class="col-10">
		<div class="form-group">
			<div class="form-group">	
				<div class="mx-auto"style="width:500px;">
					<label for="nome">NomedoLivro</label>	
					<input class="form-control"type="text"id="nome"name="nome"placeholder="NomedoLivro"requiredautofocus>
				</div>
			</div>
			<div class="form-group">
				<div class="mx-auto"style="width:500px;">
					<label for="autor">Nomedoautor</label>
					<input class="form-control"type="text"id="autor"name="autor"placeholder="AutordoLivro"required>
				</div>
			</div>
			<div class="form-group">	
				<div class="mx-auto"style="width:500px;">
					<label for="quantidade">Quantidadedepáginas</label>
					<input class="form-control"type="number"id="quantidade"name="quantidade"placeholder="QuantidadedePáginas"required>
				</div>
			</div>
			<div class="form-group">
				<div class="mx-auto"style="width:500px;">
					<label for="number">Valorunitáriodolivro</label>
					<input class="form-control"type="text"id="preco"name="preco"placeholder="PreçodoLivro"onkeypress="formatarMoeda();"required>
				</div>
			</div>
			<div class="form-group">
			<div class="mx-auto"style="width:500px;">
				<label for="date">Datadelançamentodolivro</label>
				<input class="form-control"type="date"id="data"name="data"placeholder="DatadePulicação"required>
				</div>
				</div>

				<div class="form-group">
					<div class="col-lg-10"style="text-align:right;">
						<button type="submit"class="btnbtn-success"id="cadastrar">Cadastrar</button>
					</div>
				</div>
			</form>
		</div>
</body>
</html>