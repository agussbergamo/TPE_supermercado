<?php
/* Smarty version 3.1.39, created on 2021-10-14 03:59:25
  from 'C:\xampp\htdocs\web2\TPE_supermercado\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61678efd8d8f86_22884533',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cafda5430dc6486293d508dd987ff2a0d34f6b6d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE_supermercado\\templates\\header.tpl',
      1 => 1634176761,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61678efd8d8f86_22884533 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo BASE_URL;?>
"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">  
    <title>Supermercado</title>
</head>

<body>
<div class="container">
    <h1>Supermercado</h1>
    <nav >
        <div class= "row">
            <a href="home/" class="btn btn-primary" >Home</a>
            <a href="listProd/" class="btn btn-primary">Productos</a>
            <a href="listCat/" class="btn btn-primary">Categorías</a>
            <a href="login/" class="btn btn-primary">Login</a>
            <a href="logout/" class="btn btn-primary">Logout</a>
        </div>
    </nav>
</div><?php }
}
