{include 'templates/headerAdmin.tpl'}
    <div class="contenedor">
        <label>¿Está seguro que quiere Eliminar?</label>
        <div class="btn-eliminar-jugador">
            <a class="btn btn-dark" href="eliminarMarca/{$marca->id_marca}"><b>Eliminar</b></a>;
            <a class="btn btn-dark" href="listaMarca"><b>Volver</b></a>;
        </div>
    </div>
{include 'templates/footer.tpl'}