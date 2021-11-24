{include file="templates/header.tpl"}


<div class="text-center">
    <h1 class="display-2"> Detalle de producto </h1>
</div>

<div class="d-flex justify-content-center">
  <div class="card bg-primary p-2 text-black bg-opacity-50" style="width: 18rem;" id="producto" data-id="{$product->id_prod}" data-role="{$rol}" data-id_usuario="{$id_usuario}">
    <img class="card-img-top" src="{$product->imagen}" alt="El producto no posee imagen.">
    <div class="card-body">
      <ul>
          <li> Producto: {$product->nom_prod}</li>
          <li> Categoría: {$product->nom_cat}</li>
          <li> Marca: {$product->marca}</li>
          <li> Peso: {$product->peso} {$product->unidad_medida}</li>
          <li> Precio: {$product->precio}</li>
      </ul>
    </div>
  </div>

</div>

<div class="d-flex justify-content-center">
  <a href="listProd" class="btn btn-outline-primary align-text-center"> Volver </a>
</div>


<div id="commList">
    {include file="templates/vue/comments.tpl"}
</div>

</div>
<script src="js/commentsCSR.js"></script>

{include file="templates/footer.tpl"}

