<?php
/* Smarty version 3.1.39, created on 2021-09-24 01:06:26
  from 'C:\xampp\htdocs\web2\TPE_supermercado\templates\catList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614d0872d14b02_19593260',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4fdc6bb4c2f2472b7ec0ee98eb2925b3137a245' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE_supermercado\\templates\\catList.tpl',
      1 => 1632438257,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
  ),
),false)) {
function content_614d0872d14b02_19593260 (Smarty_Internal_Template $_smarty_tpl) {
?><!--<?php $_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>-->

<h1> <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 </h1>

<ul>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
    <li>
        <?php echo $_smarty_tpl->tpl_vars['category']->value->nom_cat;?>

    </li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>

<?php }
}
