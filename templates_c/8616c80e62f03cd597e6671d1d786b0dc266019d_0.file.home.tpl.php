<?php
/* Smarty version 3.1.39, created on 2021-10-14 23:45:58
  from 'C:\xampp\htdocs\web2\TPE_supermercado\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6168a5168a7546_07139879',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8616c80e62f03cd597e6671d1d786b0dc266019d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE_supermercado\\templates\\home.tpl',
      1 => 1634247955,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6168a5168a7546_07139879 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="container">
    <div class="row justify-content-center">
    <h1 class="text-center"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1> 
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
