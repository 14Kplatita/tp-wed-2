<?php
/* Smarty version 4.3.1, created on 2023-06-21 06:27:26
  from 'C:\xampp\htdocs\tp wed 2\templates\añadir_categoria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64927c2e2425d7_90801398',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a07a0c63bac4f0d16c3396b80c2a3c216fb99fb6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp wed 2\\templates\\añadir_categoria.tpl',
      1 => 1687321222,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_64927c2e2425d7_90801398 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form class="formulario" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
añadircategoria" method="POST" autocomplete="off">
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
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
