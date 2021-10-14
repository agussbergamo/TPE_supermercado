<?php
/* Smarty version 3.1.39, created on 2021-10-15 00:05:39
  from 'C:\xampp\htdocs\web2\TPE_supermercado\templates\listProd.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6168a9b3b36a74_34628786',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56bf23247cd660fcc2ded165252572dedfa653f5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE_supermercado\\templates\\listProd.tpl',
      1 => 1634249136,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6168a9b3b36a74_34628786 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2> <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 </h2>

<ul>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
    <li>
        <a class=fs-4 href="viewProd/<?php echo $_smarty_tpl->tpl_vars['product']->value->id_prod;?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value->nom_prod;?>
</a> | Categoría: <?php echo $_smarty_tpl->tpl_vars['product']->value->nom_cat;?>

        <a class="btn btn-outline-danger" href="deleteProd/<?php echo $_smarty_tpl->tpl_vars['product']->value->id_prod;?>
">Borrar</a>
        <a class="btn btn-outline-secondary" href="editProd/<?php echo $_smarty_tpl->tpl_vars['product']->value->id_prod;?>
">Editar</a>
    </li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>

<h3>Agregar producto</h3>
<form action="addProd" method="post">
    <input type="text" placeholder="Producto" name="nom_prod" required class="form-control form-control-lg">
    <input type="text" placeholder="Marca" name="marca" required class="form-control form-control-lg">
    <input type="number" placeholder="Peso" name="peso" required class="form-control form-control-lg">
    <select name="unidad_medida" required class="form-control form-control-lg">
        <option value="gr">Gramos</option>
        <option value="ml">Mililitros</option>
    </select>
    <input type="number" placeholder="Precio" name="precio" required class="form-control form-control-lg">
    <select name="id_cat" required class="form-control form-control-lg">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['category']->value->id_cat;?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value->nom_cat;?>
</option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>)
    </select>
    <input type="submit" class="btn btn-primary">
</form>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
