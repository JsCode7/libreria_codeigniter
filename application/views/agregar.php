<div id="cointainer">
    <div id="body">
        <div class ="row">
            <div class="col s12">
                <table id="Table" class='display dataTable'>
                    <thead>
                        <th>Código Producto</th>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Descripicion</th>
                        <th>Descuento</th>
                        <th>Eliminar</th>
                        <th>Modificar</th>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<h3>Agregar</h3>
<div class="row">
    <form class="col s12">
        <div class="row">
            <div class="input-field col s6">
            <input id="codproducto" type="text" class="validate">
            <label for="codproducto">Código Producto</label>
            </div>
            <div class="input-field col s6">
            <input id="nombre" type="text" class="validate">
            <label for="nombre">Nombre</label>
            </div>
            <div class="input-field col s6">
            <input id="precio" type="text" class="validate">
            <label for="precio">Precio</label>
            </div>
            <div class="input-field col s6">
            <input id="descripcion" type="text" class="validate">
            <label for="descripcion">Descripción</label>
            </div>
            <div class="input-field col s6">
            <input id="descuento" type="text" class="validate">
            <label for="descuento">Descuento</label>
        </div>
    </form>
  </div>

  <div class="row">
      <div class="col s12 center-align">
      <button class="btn waves-effect waves-light btn-small" id="agregar"> 
          <i class="material-icons">Enviar</i>
      </button>
      </div>
  </div>

