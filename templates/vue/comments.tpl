{literal}

<h2 class="display-4 text-center"> {{titulo}} </h2>

<section v-if="rol == 'admin' || rol == 'user'" class="d-flex justify-content-center">
    <div class="col-5 m-3">
      <div class="d-flex">
          <h3>Filtrar por puntaje</h3>
          <a v-on:click="getComm" class="btn btn-primary ml-4">Mostrar todos</a>
      </div>
      <form id="form_filtro" v-on:submit.prevent="filter" class="d-flex ml-3 mr-3 mb-3">
          <select name="puntaje" required class="form-control form-control-lg">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
          </select>
          <input type="submit" class="btn btn-primary">
      </form>
    </div>

    <div class="col-5 m-3">
      <div class="d-flex justify-content-between">
          <h3>Ordenar por</h3>
      </div>
      <form id="form_orden" v-on:submit.prevent="orderBy">
          <div class="d-flex">
            <select name="atributo" required class="form-control form-control-lg">
                <option value="fecha">Fecha</option>
                <option value="puntaje">Puntaje</option>
            </select>
            <select name="criterio" required class="form-control form-control-lg">
                <option value="asc">Ascendente</option>
                <option value="desc">Descendente</option>
            </select>
            <input type="submit" class="btn btn-primary">
          </div>
      </form>
    </div>
</section>

<ul class="list-group m-1">
    <li v-for="comentario in comentarios" class="list-group-item d-flex justify-content-between align-items-center"> Usuario: {{comentario.usuario}} - Comentario: {{comentario.comentario}} - Puntaje : {{comentario.puntaje}} - Fecha : {{comentario.fecha}}
    <a v-if="rol == 'admin'" v-on:click="deleteComm(comentario.id)" data-id="comentario.id" class="btn btn-outline-danger">Borrar</a></li>
</ul>

<section v-if="rol == 'admin' || rol == 'user'" >
<h2>Agregar comentario de producto</h2>
  <form id="commForm" v-on:submit.prevent="postComm">
    <div class="mb-3 d-flex">
      <label class="form-label fs-4">Comentario</label>
      <input type="text" name="comentario" class="form-control">
    </div>
    <div class="mb-3 d-flex">
      <label class="form-label fs-4">Puntaje</label>
      <input type="text" name="puntaje" class="form-control">
    </div>
    <input type="submit" class="btn btn-primary">
  </form>
</section>

{/literal}