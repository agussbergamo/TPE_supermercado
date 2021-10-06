<?php
/* Smarty version 3.1.39, created on 2021-10-06 20:03:01
  from 'C:\xampp\htdocs\web2\TPE_supermercado\templates\detailProd.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615de4d50038b3_30695422',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c13929c1bc0de921f243abb71e029938350842e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE_supermercado\\templates\\detailProd.tpl',
      1 => 1633543315,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_615de4d50038b3_30695422 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2>Detalle de producto</h2>
<ul>
    <li> Producto: <?php echo $_smarty_tpl->tpl_vars['product']->value->nom_prod;?>
</li>
    <li> Categoría: <?php echo $_smarty_tpl->tpl_vars['product']->value->nom_cat;?>
</li>
    <li> Marca: <?php echo $_smarty_tpl->tpl_vars['product']->value->marca;?>
</li>
    <li> Peso: <?php echo $_smarty_tpl->tpl_vars['product']->value->peso;?>
 <?php echo $_smarty_tpl->tpl_vars['product']->value->unidad_medida;?>
</li>
    <li> Precio: <?php echo $_smarty_tpl->tpl_vars['product']->value->precio;?>
</li>
</ul>

<a href="listProd"> Volver </a>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
