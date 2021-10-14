<?php
/* Smarty version 3.1.39, created on 2021-10-14 03:45:48
  from 'C:\xampp\htdocs\web2\TPE_supermercado\templates\listCat.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61678bcc6825f2_62450278',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '639cc5bd1e278829a5d1ba663203f7b4cc7db105' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE_supermercado\\templates\\listCat.tpl',
      1 => 1634175946,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_61678bcc6825f2_62450278 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
        <a href="viewCat/<?php echo $_smarty_tpl->tpl_vars['category']->value->nom_cat;?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value->nom_cat;?>
</a>
            <a href="deleteCat/<?php echo $_smarty_tpl->tpl_vars['category']->value->id_cat;?>
">Borrar</a>
            <a href="editCat/<?php echo $_smarty_tpl->tpl_vars['category']->value->id_cat;?>
">Editar</a>
    </li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>

<h1>Agregar categoría</h1>
<form action="addCat" method="post">
    <input type="text" placeholder="Categoría" name="nom_cat" required>
    <p> ¿Requiere refrigeración? </p>
    <select name="refrig" required>
        <option value="1">Si</option>
        <option value="0">No</option>
    </select>
    <input type="submit">
</form>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
