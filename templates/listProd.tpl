{include file="templates/header.tpl"}

<h2> {$title} </h2>

<ul>
{foreach from=$products item=$product}
    <li>
        <a class=fs-4 href="viewProd/{$product->id_prod}">{$product->nom_prod}</a> | Categoría: {$product->nom_cat}
         {if $logged == true}
            <a class="btn btn-outline-danger" href="deleteProd/{$product->id_prod}">Borrar</a>
            <a class="btn btn-outline-secondary" href="editProd/{$product->id_prod}">Editar</a>
        {/if}
    </li>
{/foreach}
</ul>

 {if $logged == true}
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
            {foreach from=$categories item=$category}
                <option value="{$category->id_cat}">{$category->nom_cat}</option>
            {/foreach})
        </select>
        <input type="submit" class="btn btn-primary">
    </form>
{/if}

{include file="templates/footer.tpl"}
