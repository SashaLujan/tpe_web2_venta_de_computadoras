{include 'templates/headerAdmin.tpl'}
    
    <div class="container">  
        <h1>Modifique los datos de la marca</h1>
        <form action="guardarEditMarca" method="POST" class="my-4">
            {foreach $listaMarca item= marca}
            <div class="form-group">
                <label>Nombre de la marca</label>
                <input name="nombre" type="text" value={$marca->nombre_marca} class="form-control">
            </div>
            {/foreach}
            <button type="submit" class="btn btn-danger">Guardar</button>
            <a class="btn btn-danger" href="listaMarca"><b>Volver</b></a>
        </form>
    </div>

{include 'templates/footer.tpl'}
