{include 'templates/headerAdmin.tpl'}
    <div class="container">  
        <h1>Edite la computadora</h1>
        <form action="guardarEditComputer" method="post" class="my-4">
            <input name="id_computadora" type="hidden" value={$computadora->id_computadora} class="form-control">
            <div class="form-group">
                <label>nombre</label>
                <input name="nombre" type="text" value={$computadora->nombre} class="form-control">
            </div>
            <div class="form-group">
                <label>Marca</label>
                <input name="marca" type="text" value={$computadora->marca} class="form-control">
            </div>
            <div class="form-group">
                <label>Sistema Operativo</label>
                <input name="sistOpertaivo" type="text" value={$computadora->sistOpertaivo} class="form-control">
            </div>
            {*<input name="marca" type="hidden" value={$computadora->id_marca} class="form-control">*}
            <button type="submit" class="btn btn-primary"><b>Guardar</b></button>
            <a class="btn btn-danger" href="listaComp"><b>Volver</b></a>
        </form>
        </div>

{include 'footer.tpl'}
