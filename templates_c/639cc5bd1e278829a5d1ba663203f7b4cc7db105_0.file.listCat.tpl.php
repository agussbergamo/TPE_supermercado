<?php
/* Smarty version 3.1.39, created on 2021-10-15 00:06:48
  from 'C:\xampp\htdocs\web2\TPE_supermercado\templates\listCat.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6168a9f84c7316_16384035',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '639cc5bd1e278829a5d1ba663203f7b4cc7db105' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE_supermercado\\templates\\listCat.tpl',
      1 => 1634249205,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6168a9f84c7316_16384035 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h2>

<ul>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
    <li>
        <a class=fs-4 href="viewCat/<?php echo $_smarty_tpl->tpl_vars['category']->value->nom_cat;?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value->nom_cat;?>
</a>
            <a class="btn btn-outline-danger" href="deleteCat/<?php echo $_smarty_tpl->tpl_vars['category']->value->id_cat;?>
">Borrar</a>
            <a class="btn btn-outline-secondary" href="editCat/<?php echo $_smarty_tpl->tpl_vars['category']->value->id_cat;?>
">Editar</a>
    </li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>

<h3>Agregar categoría</h3>
<form action="addCat" method="post">
    <input type="text" placeholder="Categoría" name="nom_cat" required class="form-control form-control-lg">
    <p> ¿Requiere refrigeración? </p>
    <select name="refrig" required class="form-control form-control-lg">
        <option value="1">Si</option>
        <option value="0">No</option>
    </select>
    <input type="submit" class="btn btn-primary">
</form>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
