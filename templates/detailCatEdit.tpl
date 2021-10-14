{include file="templates/header.tpl"}

<h2>Editar categoría</h2>
<form action="submitEditCat/{$category->id_cat}" method="post">
    <input type="text" placeholder="Categoría" name="nom_cat" value="{$category->nom_cat}" required class="form-control form-control-lg">
    <p> ¿Requiere refrigeración? </p>
    <select name="refrig" required class="form-control form-control-lg">
        <option value="1" {if "1" == $category->refrig} selected {/if}>Si</option>
        <option value="0" {if "0" == $category->refrig} selected {/if}>No</option>
    </select>
    <input type="submit" class="btn btn-primary">
</form>

<a href="listCat" class="btn btn-outline-primary"> Volver </a>

{include file="templates/footer.tpl"}


