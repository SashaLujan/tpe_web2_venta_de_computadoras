{include 'templates/headerAdmin.tpl'}
    
    <div class="container">  
        <h1>Edite la marca</h1>
        <form action="guardarEditMarca" method="POST" class="my-4">
            <div class="form-group">
                <input name="marca" type="hidden" value={$marca->id_marca} class="form-control">
                <label>nombre</label>
                <input name="nombreMarca" type="text" value={$marca->nombre} class="form-control">
            </div>
            <button type="submit" class="btn btn-danger">Guardar</button>
            <a class="btn btn-danger" href="listaMarca"><b>Volver</b></a>
        </form>
    </div>

{include 'templates/footer.tpl'}
