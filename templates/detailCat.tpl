{include file="templates/header.tpl"}

<div class="text-center">
    <h1 class="display-2">Lista de productos de la categoría {$title}</h1>
</div>

<div class="d-flex justify-content-center">
    <div class="card bg-primary p-2 text-black bg-opacity-50" style="width: 36rem;">
        <div class="card-body">
            <ul>
            {foreach from=$products item=$product}
                <li class=fs-4> {$product->nom_prod}</li>
            {/foreach}
            </ul>
        </div>
    </div>
</div>

<div class="d-flex justify-content-center">
  <a href="listCat" class="btn btn-outline-primary align-text-center"> Volver </a>
</div>

{include file="templates/footer.tpl"}


