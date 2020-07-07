{include 'templates/headerAdmin.tpl'}
    <div id="eliminarComp" class="contenedor">
        <label>¿Está seguro que quiere Eliminar?</label>
        <div>
            <a class="btn btn-dark" href="eliminarComp/{$computadora->id_computadora}"><b>Eliminar</b></a>;
            <a class="btn btn-dark" href="listaComp"><b>Volver</b></a>;
        </div>
    </div>
{include 'templates/footer.tpl'}