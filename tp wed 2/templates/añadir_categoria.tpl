{include file = 'header.tpl'}
<form class="formulario" action="{$BASE_URL}añadircategoria" method="POST" autocomplete="off">
	<div class="row g-3">
		<div class="col">
			<label>fabricante</label>
			<input class="form-control" type="text" name="categoria_fabricante" maxlength="40" placeholder="fabricante">
		</div>
		<div class="col">
			<label>generacion</label>
			<input class="form-control" type="text" name="categoria_generacion" maxlength="40" placeholder="generacion">
		</div>
		<div class="col-12">
			<button type="submit" class="btn btn-success">añadir</button>
		</div>
	</div>
</form>
{include file = 'footer.tpl'}