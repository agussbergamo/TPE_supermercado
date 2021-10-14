<?php
/* Smarty version 3.1.39, created on 2021-10-14 23:53:12
  from 'C:\xampp\htdocs\web2\TPE_supermercado\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6168a6c8408c68_21606878',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cafda5430dc6486293d508dd987ff2a0d34f6b6d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE_supermercado\\templates\\header.tpl',
      1 => 1634248390,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6168a6c8408c68_21606878 (Smarty_Internal_Template $_smarty_tpl) {
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

<body class="bg-primary p-2 text-black bg-opacity-50">

    <div class="container">
        <nav>
            <div class= "row">
                <div class="col-7"><h1>Supermercado</h1></div>
                <div class="col"><a href="home/" class="btn btn-outline-primary" >Home</a></div>
                <div class="col"><a href="listProd/" class="btn btn-outline-primary">Productos</a></div>
                <div class="col"><a href="listCat/" class="btn btn-outline-primary">Categorías</a></div>
                <div class="col"><a href="login/" class="btn btn-outline-primary">Login</a></div>
                <div class="col"><a href="logout/" class="btn btn-outline-primary">Logout</a></div>
            </div>
        </nav>
    </div>
<?php }
}
