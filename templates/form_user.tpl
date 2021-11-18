{include file="templates/header.tpl"}


<h2>{$title}</h2>

{if $rol == "none"}
  <form action="{$action}" method="post">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="text" name="usuario" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" name="contraseña" class="form-control" id="exampleInputPassword1">
    </div>
    <input type="submit" class="btn btn-primary">
  </form>
{/if}

  <h4>{$mensaje}</h4>

{include file="templates/footer.tpl"}





