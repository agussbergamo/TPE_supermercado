<?php
/* Smarty version 3.1.39, created on 2021-10-06 20:03:08
  from 'C:\xampp\htdocs\web2\TPE_supermercado\templates\detailProdEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615de4dc8b9c86_85146876',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27f18fbb08d5f1d4c855fb7bc743aa149d346502' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE_supermercado\\templates\\detailProdEdit.tpl',
      1 => 1633543373,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_615de4dc8b9c86_85146876 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2>Detalle de producto</h2>

<form action="submitEdit/<?php echo $_smarty_tpl->tpl_vars['product']->value->id_prod;?>
" method="post">
    <ul>
        <li> Producto: <?php echo $_smarty_tpl->tpl_vars['product']->value->nom_prod;?>
</li><input type="text" placeholder="Producto" name="nom_prod" required>
        <li> Categoría: <?php echo $_smarty_tpl->tpl_vars['product']->value->nom_cat;?>
</li><select name="id_cat" required>
                                                    <option value="1">Almacén</option>
                                                    <option value="2">Lácteos</option>
                                                    <option value="3">Bebidas</option>
                                                    <option value="4">Limpieza</option>
                                                    <option value="5">Congelados</option>
                                                    <option value="6">Perfumería</option>
                                                </select>    
        <li> Marca: <?php echo $_smarty_tpl->tpl_vars['product']->value->marca;?>
</li><input type="text" placeholder="Marca" name="marca" required>
        <li> Peso: <?php echo $_smarty_tpl->tpl_vars['product']->value->peso;?>
</li><input type="number" placeholder="Peso" name="peso" required>
        <li> Unidad de medida:<?php echo $_smarty_tpl->tpl_vars['product']->value->unidad_medida;?>
</li><select name="unidad_medida" required>
                                                                <option value="gr">Gramos</option>
                                                                <option value="ml">Mililitros</option>
                                                            </select>
        <li> Precio: <?php echo $_smarty_tpl->tpl_vars['product']->value->precio;?>
</li><input type="number" placeholder="Precio" name="precio" required>
    </ul>
    <input type="submit">
</form>

<a href="listProd"> Volver </a>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
