
<h1 class="fs-4 text-center">Listado de Museos</h1>
<div style="max-width: 800px;" class="mx-auto">
    <a href="registrar" class="btn btn-dark mb-3">Crear</a>
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th>Nombre</th>
                <th>Direccion</th>
                <th>Fecha</th>
                <th>Descripcion</th>
                <th>Estrellas</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rowset as $row): ?>
                <tr>
                    <td><?php echo $row->nombre_museo;?></td>
                    <td><?php echo $row->direccion;?></td>
                    <td><?php echo $row->fecha_fundacion;?></td>
                    <td><?php echo $row->descripcion;?></td>
                    <td><?php echo $row->estrellas;?></td>
                    <td>
                        <a href="editar/<?php echo $row->id_museo;?>" class="btn btn-warning">Editar</a>
                        <a href="eliminar/<?php echo $row->id_museo;?>" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>    
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
