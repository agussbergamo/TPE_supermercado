<?php
/* Smarty version 3.1.39, created on 2021-10-15 00:11:45
  from 'C:\xampp\htdocs\web2\TPE_supermercado\templates\detailProdEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6168ab215b0592_74755654',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27f18fbb08d5f1d4c855fb7bc743aa149d346502' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE_supermercado\\templates\\detailProdEdit.tpl',
      1 => 1634249501,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6168ab215b0592_74755654 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2>Modificar producto</h2>

<form action="submitEditProd/<?php echo $_smarty_tpl->tpl_vars['product']->value->id_prod;?>
" method="post">
    <ul>
        <li> Producto: <?php echo $_smarty_tpl->tpl_vars['product']->value->nom_prod;?>
</li><input type="text" placeholder="Producto" name="nom_prod" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->nom_prod;?>
" required class="form-control form-control-lg">
        <li> Categoría: <?php echo $_smarty_tpl->tpl_vars['product']->value->nom_cat;?>
</li><select name="id_cat" required class="form-control form-control-lg">
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['category']->value->id_cat;?>
" <?php if ($_smarty_tpl->tpl_vars['product']->value->id_cat == $_smarty_tpl->tpl_vars['category']->value->id_cat) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['category']->value->nom_cat;?>
</option>
                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>)
                                                </select>                                            
        <li> Marca: <?php echo $_smarty_tpl->tpl_vars['product']->value->marca;?>
</li><input type="text" placeholder="Marca" name="marca" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->marca;?>
" required class="form-control form-control-lg">
        <li> Peso: <?php echo $_smarty_tpl->tpl_vars['product']->value->peso;?>
</li><input type="number" placeholder="Peso" name="peso" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->peso;?>
" required class="form-control form-control-lg">
        <li> Unidad de medida:<?php echo $_smarty_tpl->tpl_vars['product']->value->unidad_medida;?>
</li><select name="unidad_medida" required class="form-control form-control-lg">
                                                                <option value="gr" <?php if ("gr" == $_smarty_tpl->tpl_vars['product']->value->unidad_medida) {?> selected <?php }?>>Gramos</option>
                                                                <option value="ml" <?php if ("ml" == $_smarty_tpl->tpl_vars['product']->value->unidad_medida) {?> selected <?php }?>>Mililitros</option>
                                                            </select>
        <li> Precio: <?php echo $_smarty_tpl->tpl_vars['product']->value->precio;?>
</li><input type="number" placeholder="Precio" name="precio" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->precio;?>
" required class="form-control form-control-lg">
    </ul>
    <input type="submit" class="btn btn-primary">
</form>

<a href="listProd" class="btn btn-outline-primary"> Volver </a>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
