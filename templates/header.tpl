<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{BASE_URL}"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">  
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <title>Supermercado</title>
</head>

<body class="bg-primary p-2 text-black bg-opacity-50">

    <div class="container">
        <nav>
            <div class="row">
                <div class="col-2"><h3>Supermercado</h3></div>
                <div class="col"><a href="home/" class="btn btn-outline-primary" >Home</a></div>
                <div class="col"><a href="listProd/" class="btn btn-outline-primary">Productos</a></div>
                <div class="col"><a href="listCat/" class="btn btn-outline-primary">Categorías</a></div>
                <div class="col"><a href="regist/" class="btn btn-outline-primary">Registro</a></div>                
                <div class="col"><a href="login/" class="btn btn-outline-primary">Login</a></div>
                <div class="col"><a href="logout/" class="btn btn-outline-primary">Logout</a></div>
                 {if $rol == "admin"}
                    <div class="col"><a href="settings/" class="btn btn-outline-primary">Settings</a></div>
                 {/if}
                 {if $rol == "admin" || $rol == "user"}
                    <p class="font-italic"> Bienvenido {$usuario} </p>
                 {/if}
            </div>
        </nav>

    </div>
