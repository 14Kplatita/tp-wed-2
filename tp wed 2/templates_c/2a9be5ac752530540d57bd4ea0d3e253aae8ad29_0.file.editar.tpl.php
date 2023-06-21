<?php
/* Smarty version 4.3.1, created on 2023-06-21 04:35:31
  from 'C:\xampp\htdocs\tp wed 2\templates\editar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_649261f31406f2_03564648',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a9be5ac752530540d57bd4ea0d3e253aae8ad29' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp wed 2\\templates\\editar.tpl',
      1 => 1687314928,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_649261f31406f2_03564648 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="formula">
    <form class="cosa" action="<?php echo ($_smarty_tpl->tpl_vars['BASE_URL']->value).($_smarty_tpl->tpl_vars['action']->value);?>
" method="POST" autocomplete="off">
        <div class="amigo">
            <label for="exampleFormControlTextarea1" class="form-label">fabricante</label>
            <input class="form-control" name="modelo_fabricante" type="text" value="<?php echo $_smarty_tpl->tpl_vars['fabricante']->value;?>
"> 
        </div>
        <div class="amigo">
            <label for="exampleFormControlTextarea1" class="form-label">modelo</label>
            <input class="form-control" name="modelo_modelo" type="text" value="<?php echo $_smarty_tpl->tpl_vars['modelo']->value;?>
"> 
        </div>
        <div class="amigo">
            <label for="exampleFormControlTextarea1" class="form-label">espesificaciones</label>
            <textarea class="form-control" name="modelo_especificaciones"></textarea>
        </div>
        <div class="amigo">
            <label for="exampleFormControlTextarea1" class="form-label">imagen</label>
            <textarea class="form-control" name="modelo_imagen"></textarea>
        </div>
        <div class="amigo">
            <label for="exampleFormControlTextarea1" class="form-label">historia</label>
            <textarea class="form-control" name="modelo_historia"></textarea>
        </div>
        <div class="amigo">
            <label for="exampleFormControlTextarea1" class="form-label">juegos</label>
            <textarea class="form-control" name="modelo_juegos"></textarea>
        </div>
        <div class="amigo">
            <label for="exampleFormControlTextarea1" class="form-label">categoria</label>
            <input class="form-control" name="categoria_id"> 
        </div>
        <p class="has-text-centered">
            <button type="submit" class="btn btn-success">Guardar</button>
        </p>
    </form>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
