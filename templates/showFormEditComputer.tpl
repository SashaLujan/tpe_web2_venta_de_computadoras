{include 'templates/headerAdmin.tpl'}
    <div class="contenedor">  
        <form action="guardarEditComputer" method="POST" class="my-4">
            <h4>Modifique los datos de la computadora</h4>
            <input name="id_computadora" type="hidden" value={$datosComp>id_computadora} class="form-control">
                <div class="form-group">
                    <label>Nombre de computadora</label>
                    <input name="nombre" type="text" value={$datosComp->nombre_comp} class="form-control">
                </div>
                <div class="form-group">
                    <label>Nombre de marca</label>
                    <select name="marca">
                    {foreach from=$listaMarca item=marca}
                        <option value= {$marca->id_marca}>{$marca->nombre_marca}</option>
                    {/foreach}
                    </select>
                </div>
                <div class="form-group">
                    <label>Sistema Operativo</label>
                    <input name="sistOpertivo" type="text" value={$datosComp->sistOperativo} class="form-control">
                </div>
                <div>
                    <label>Foto</label>
                    <input type="text" name="foto" value="{$datosComp->imagen}">
                </div>
            {*<input name="marca" type="hidden" value={$computadora->id_marca} class="form-control">*}
            <button type="submit" class="btn btn-dark"><b>Guardar</b></button>
            <a class="btn btn-dark" href="listaComp"><b>Volver</b></a>
        </form>
        </div>

{include 'footer.tpl'}
