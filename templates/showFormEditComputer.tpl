{include 'templates/headerAdmin.tpl'}
    <div class="container">  
        <h1>Edite la computadora</h1>
        <form action="guardarEditComputer" method="POST" class="my-4">
            <div class="form-group">
                <input name="id_computadora" type="hidden" value={$computadora->id_computadora} class="form-control">                            <label>nombre</label>
                <input name="nombre" type="text" value={$computadora->nombre} class="form-control">
                <label>Marca</label>
                <input name="marca" type="text" value={$computadora->marca} class="form-control">
                <label>Sistema Operativo</label>
                <input name="sistOpertaivo" type="text" value={$computadora->sistOpertaivo} class="form-control">
                <input name="marca" type="hidden" value={$computadora->id_marca} class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a class="btn btn-danger" href="listaComp"><b>Volver</b></a>;
        </form>
        </div>

{include 'footer.tpl'}
