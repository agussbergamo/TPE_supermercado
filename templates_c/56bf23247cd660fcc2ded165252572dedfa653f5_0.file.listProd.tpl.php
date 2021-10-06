<?php
/* Smarty version 3.1.39, created on 2021-10-06 19:38:16
  from 'C:\xampp\htdocs\web2\TPE_supermercado\templates\listProd.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615ddf086ab0e4_46066118',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56bf23247cd660fcc2ded165252572dedfa653f5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE_supermercado\\templates\\listProd.tpl',
      1 => 1633540700,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_615ddf086ab0e4_46066118 (Smarty_Internal_Template $_smarty_tpl) {
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
        <a href="viewProd/<?php echo $_smarty_tpl->tpl_vars['product']->value->id_prod;?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value->nom_prod;?>
</a> --> <?php echo $_smarty_tpl->tpl_vars['product']->value->nom_cat;?>

        <a href="deleteProd/<?php echo $_smarty_tpl->tpl_vars['product']->value->id_prod;?>
">Borrar</a>
        <a href="editProd/<?php echo $_smarty_tpl->tpl_vars['product']->value->id_prod;?>
">Editar</a>
    </li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>

<h1>Formulario producto</h1>
<form action="addProd" method="post">
    <input type="text" placeholder="Producto" name="nom_prod" required>
    <input type="text" placeholder="Marca" name="marca" required>
    <input type="number" placeholder="Peso" name="peso" required>
    <select name="unidad_medida" required>
        <option value="gr">Gramos</option>
        <option value="ml">Mililitros</option>
    </select>
    <input type="number" placeholder="Precio" name="precio" required>
    <select name="id_cat" required>
        <option value="1">Almacén</option>
        <option value="2">Lácteos</option>
        <option value="3">Bebidas</option>
        <option value="4">Limpieza</option>
        <option value="5">Congelados</option>
        <option value="6">Perfumería</option>
    </select>
    <input type="submit">
</form>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
