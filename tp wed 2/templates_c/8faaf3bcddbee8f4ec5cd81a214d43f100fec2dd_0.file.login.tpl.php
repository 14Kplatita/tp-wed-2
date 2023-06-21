<?php
/* Smarty version 4.3.1, created on 2023-06-21 01:24:55
  from 'C:\xampp\htdocs\tp wed 2\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_649235472c89e8_78611245',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8faaf3bcddbee8f4ec5cd81a214d43f100fec2dd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp wed 2\\templates\\login.tpl',
      1 => 1687303493,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_649235472c89e8_78611245 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="form">    
    <form class="row g-3" method="post" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
inicio_seccion">
        <h4>Inicio de Seccion</h4>
        <div class="form-floating mb-3">
            <input name="usuario" type="text" class="form-control" placeholder="usuario">
            <label for="floatingInput">usuario</label>
        </div>
        <div class="form-floating">
            <input name="password" type="password" class="form-control" placeholder="contraseña">
            <label for="floatingPassword">contraseña</label>
        </div>
        <div class="col-12">
        <a class="btn btn-primary">Sign in</a>
        <a class="btn btn-success" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
formulario">Crear cuenta nueva</a>
        </div>
    </form>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
