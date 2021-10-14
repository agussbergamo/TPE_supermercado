<?php
/* Smarty version 3.1.39, created on 2021-10-14 03:03:44
  from 'C:\xampp\htdocs\web2\TPE_supermercado\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616781f0c106c4_60882535',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8616c80e62f03cd597e6671d1d786b0dc266019d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE_supermercado\\templates\\home.tpl',
      1 => 1634173423,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_616781f0c106c4_60882535 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1>Bienvenido!</h1>

<img src="images/supermercado.jpg" class="img-fluid" alt="...">

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
