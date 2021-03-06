{include 'templates/headerAdmin.tpl'}
    
    <div class="contenedor">  
        <form class="contenedor-edit-marca" action="guardarEditMarca" method="POST" class="my-4">
            <h4>Modifique los datos de la marca</h4>
            {foreach $listaMarca item= marca}
            <div class="form-group">
                <label>Nombre de la marca</label>
                <input name="nombre" type="text" value={$marca->nombre_marca} class="form-control">
            </div>
            {/foreach}
            <button type="submit" class="btn btn-dark">Guardar</button>
            <a class="btn btn-dark" href="listaMarca"><b>Volver</b></a>
        </form>
    </div>

{include 'templates/footer.tpl'}
