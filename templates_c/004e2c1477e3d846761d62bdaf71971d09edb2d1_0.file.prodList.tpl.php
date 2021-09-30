<?php
/* Smarty version 3.1.39, created on 2021-09-30 15:16:28
  from 'C:\xampp\htdocs\web2\TPE_supermercado\templates\prodList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6155b8ac1dce52_66616071',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '004e2c1477e3d846761d62bdaf71971d09edb2d1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE_supermercado\\templates\\prodList.tpl',
      1 => 1633007786,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
  ),
),false)) {
function content_6155b8ac1dce52_66616071 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1> <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 </h1>

<ul>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
    <li>
        <?php echo $_smarty_tpl->tpl_vars['product']->value->nom_prod;?>
 --> <?php echo $_smarty_tpl->tpl_vars['product']->value->nom_cat;?>

    </li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>

<?php }
}
