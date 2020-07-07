{include 'headerAdmin.tpl'}
    <div class="contenedor">
        <form action="guardarComp" method="POST" enctype="multipart/form-data" class="my-4">
            <h1>Ingrese una computadora nueva</h1>
            <div class="form-group">
                <label>Ingrese el nombre</label>
                <input name="nombre" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>Seleccione la marca</label>
                <select name="marca">
                    {foreach from=$listaMarca item=marcas}
                        <option value= {$marcas->id_marca}>{$marcas->nombre_marca}</option>
                    {/foreach}
                </select>
            </div>
            <div class="form-group">
                <label>Ingrese el sistema operativo</label>
                <input name="sistOperativo" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>Ingrese una imagen</label>
                <input name="foto" type="file" class="form-control">
            </div>
            <button type="submit" class="btn btn-dark">Guardar</button>
            <a class="btn btn-dark" href="listaComp"><b>Volver</b></a>
        </form>
    </div>

{include 'templates/footer.tpl'}