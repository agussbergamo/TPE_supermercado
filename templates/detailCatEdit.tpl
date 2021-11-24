{include file="templates/header.tpl"}

<div class="text-center">
    <h1 class="display-2"> Modificar categoría </h1>
</div>

<form action="submitEditCat/{$category->id_cat}" method="post">
    <input type="text" placeholder="Categoría" name="nom_cat" value="{$category->nom_cat}" required class="form-control form-control-lg">
    <p class="fs-4"> ¿Requiere refrigeración? </p>
    <select name="refrig" required class="form-control form-control-lg">
        <option value="1" {if "1" == $category->refrig} selected {/if}>Si</option>
        <option value="0" {if "0" == $category->refrig} selected {/if}>No</option>
    </select>
    <input type="submit" class="btn btn-primary">
</form>

<a href="listCat" class="btn btn-outline-primary"> Volver </a>

{include file="templates/footer.tpl"}


