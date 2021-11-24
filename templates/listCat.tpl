{include file="templates/header.tpl"}


<div class="text-center">
    <h1 class="display-2"> {$title} </h1>
</div>

<ul class="list-group">
{foreach from=$categories item=$category}
    <li class="list-group-item d-flex justify-content-between align-items-center">
        <a class=fs-4 href="viewCat/{$category->nom_cat}">{$category->nom_cat}</a>
           {if $rol == "admin"}
                <div>
                    <a class="btn btn-outline-danger" href="deleteCat/{$category->id_cat}">Borrar</a>
                    <a class="btn btn-outline-secondary" href="editCat/{$category->id_cat}">Editar</a>
                </div>
            {/if}
    </li>
{/foreach}
</ul>

{if $rol == "admin"}
    <h3>Agregar categoría</h3>
    <form action="addCat" method="post">
        <input type="text" placeholder="Categoría" name="nom_cat" required class="form-control form-control-lg">
        <p class="fs-4"> ¿Requiere refrigeración? </p>
        <select name="refrig" required class="form-control form-control-lg">
            <option value="1">Si</option>
            <option value="0">No</option>
        </select>
        <input type="submit" class="btn btn-primary">
    </form>
{/if}

{include file="templates/footer.tpl"}
