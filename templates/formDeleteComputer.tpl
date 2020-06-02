{include 'templates/headerAdmin.tpl'}
    <div id="eliminarComp">
        <label>¿Está seguro que quiere Eliminar?</label>
        <div>
            <a class="btn btn-danger" href="eliminarComp/{$computadora->id_computadora}"><b>Eliminar</b></a>;
            <a class="btn btn-danger" href="listaComp"><b>Volver</b></a>;
        </div>
    </div>
{include 'templates/footer.tpl'}