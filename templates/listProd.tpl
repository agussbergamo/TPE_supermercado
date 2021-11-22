{include file="templates/header.tpl"}

<h2> {$title} </h2>

 {if $rol == "admin" || $rol == "user" }
    <h3>Filtrar producto</h3>
    <form action="filtrarProd" method="post">
        <select name="atributo" required class="form-control form-control-lg">
            <option value="nom_prod">Nombre producto</option>
            <option value="marca">Marca</option>
            <option value="peso">Peso</option>
            <option value="precio">Precio</option>
        </select>
        <input type="text" placeholder="Ingrese búsqueda" name="filtro" required class="form-control form-control-lg">
        <input type="submit" class="btn btn-primary">
    </form>
        <a href="listProd" type="submit" class="btn btn-primary">Mostrar todo</a>
{/if}

<ul>
{foreach from=$products item=$product}
    <li>
        <a class=fs-4 href="viewProd/{$product->id_prod}">{$product->nom_prod}</a> | Categoría: {$product->nom_cat}
         {if $rol == "admin"}
            <a class="btn btn-outline-danger" href="deleteProd/{$product->id_prod}">Borrar</a>
            <a class="btn btn-outline-secondary" href="editProd/{$product->id_prod}">Editar</a>
        {/if}
    </li>
{/foreach}
</ul>

 {if $rol == "admin"}
    <h3>Agregar producto</h3>
    <form action="addProd" method="post" enctype="multipart/form-data">
        <input type="text" placeholder="Producto" name="nom_prod" required class="form-control form-control-lg">
        <input type="text" placeholder="Marca" name="marca" required class="form-control form-control-lg">
        <input type="number" placeholder="Peso" name="peso" required class="form-control form-control-lg">
        <select name="unidad_medida" required class="form-control form-control-lg">
            <option value="gr">Gramos</option>
            <option value="ml">Mililitros</option>
        </select>
        <input type="number" placeholder="Precio" name="precio" required class="form-control form-control-lg">
        <select name="id_cat" required class="form-control form-control-lg">
            {foreach from=$categories item=$category}
                <option value="{$category->id_cat}">{$category->nom_cat}</option>
            {/foreach})
        </select>
        <input id="btn-imagen" type="file" name="input_name" id="imageToUpload" class="form-control form-control-lg">    
        <p>{$mensajeError}</p>
        <input type="submit" class="btn btn-primary">
    </form>
{/if}

{include file="templates/footer.tpl"}
