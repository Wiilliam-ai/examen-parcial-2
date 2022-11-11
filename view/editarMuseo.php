<h1 class="fs-4 text-center">Modifica un Museo</h1>
<div style="max-width: 600px;" class="mx-auto border border-4 p-2">
    <a href="../inicio" class="btn btn-dark mb-3">Volver</a>
    <form  method="post">
        <input type="hidden" name="id" 
           value="<?php echo $objMuseo->id_museo; ?>">
        <div class="mb-3">
            <label  for="nombre">Nombre</label>
            <input id="nombre" name="nombre" 
            value="<?php echo $objMuseo->nombre_museo; ?>" type="text" class="form-control" />
        </div>
        <div class="mb-3">
            <label  for="direccion">Direccion</label>
            <input id="direccion" name="direccion" 
            value="<?php echo $objMuseo->direccion; ?>" type="text" class="form-control" />
        </div>
        <div class="mb-3">
            <label  for="ciudad">Ciudad</label>
            <select name="comboCiudad" id="ciudad" class="form-select">
                <?php foreach($combo as $key => $value): ?>
                <option value="<?php echo $value->id_ciudad;?>"
                   <?php echo $value->id_ciudad==$objMuseo->id_ciudad?"selected":"";?>
                   >
                    <?php echo $value->nombre_ciudad;?>
                </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <label  for="fecha">Fecha de fundacion</label>
            <input id="fecha" name="fecha" type="date" 
            value="<?php echo $objMuseo->fecha_fundacion; ?>" class="form-control" />
        </div>
        <div class="mb-3">
            <label  for="descripcion">Descripcion</label>
            <input id="descripcion" name="descripcion" 
            value="<?php echo $objMuseo->descripcion; ?>" type="text" class="form-control" />
        </div>
        <div class="mb-3">
            <label  for="estrellas">Estrellas</label>
            <input id="estrellas" name="estrellas" 
            value="<?php echo $objMuseo->estrellas; ?>" type="number" min="0" max="5" class="form-control" />
        </div>
        <button type="submit" class="btn btn-success">Actualizar</button>
    </form>
</div>