<h1 class="fs-4 text-center">Registra un Museo</h1>
<div style="max-width: 600px;" class="mx-auto border border-4 p-2">
    <a href="inicio" class="btn btn-dark mb-3">Volver</a>
    <form  method="post">
        <div class="mb-3">
            <label  for="nombre">Nombre</label>
            <input id="nombre" name="nombre" type="text" class="form-control" />
        </div>
        <div class="mb-3">
            <label  for="direccion">Direccion</label>
            <input id="direccion" name="direccion" type="text" class="form-control" />
        </div>
        <div class="mb-3">
            <label  for="ciudad">Ciudad</label>
            <select name="comboCiudad" id="ciudad" class="form-select">
                <?php foreach($combo as $key => $value): ?>
                <option value="<?php echo $value->id_ciudad;?>">
                    <?php echo $value->nombre_ciudad;?>
                </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <label  for="fecha">Fecha de fundacion</label>
            <input id="fecha" name="fecha" type="date" class="form-control" />
        </div>
        <div class="mb-3">
            <label  for="descripcion">Descripcion</label>
            <input id="descripcion" name="descripcion" type="text" class="form-control" />
        </div>
        <div class="mb-3">
            <label  for="estrellas">Estrellas</label>
            <input id="estrellas" name="estrellas" type="number" min="0" max="5" class="form-control" />
        </div>
        <button type="submit" class="btn btn-success">Registrar</button>
    </form>
</div>