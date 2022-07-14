<h3>Modificar</h3>
  <div class="row">

    <form class="col s12">
        <?php
                    foreach ($antecedente as $datos){
                        ?>
        <div class="row">
            
                
            <div class="input-field col s6">
            <input id="codproducto" type="hidden" value="<?php echo $datos->codproducto ?>" class="validate">
            </div> 
            <div class="input-field col s6">
            <input id="nombre" type="text" value="<?php echo $datos->nombre ?>" class="validate">
            <label for="nombre">Nombre</label>
            </div>
            <div class="input-field col s6">
            <input id="precio" type="text" value="<?php echo $datos->precio ?>" class="validate">
            <label for="precio">Precio</label>
            </div>
            <div class="input-field col s6">
            <input id="descripcion" type="text" value="<?php echo $datos->descripcion ?>" class="validate">
            <label for="descripcion">Descripción</label>
            </div>
            <div class="input-field col s6">
            <input id="descuento" type="text" value="<?php echo $datos->descuento ?>" class="validate">
            <label for="descuento">Descuento</label>
            </div>
            
        </div>
        <?php } ?>
    </form>
  </div>

  <div class="row">
      <div class="col s12 center-align">
      <button class="btn waves-effect waves-light btn-small" id="editar"> 
          <i class="material-icons">Modificar</i>
      </button>
      </div>
  </div>