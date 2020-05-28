{include 'templates/header.tpl'}
    <div class="container">  
        <h1>Edite la computadora{$computadora[0]->nombre}</h1>
        <form action="guardarEditComputer/{$computadora[0]->nombre}" method="post" class="my-4">
        <div class="form-group">
                    <input name="idcomputadora" type="hidden" value={$computadora[0]->id_computadora} class="form-control">                            <label>nombre</label>
                    <input name="nombrecomputadora" type="text" value={$computadora[0]->nombre} class="form-control">
                             <label>Marca</label>
                    <input name="marcacomputadora" type="text" value={$computadora[0]->marca} class="form-control">
                             <label>Sistema Operativo</label>
                    <input name="sistOpertaivo" type="text" value={$computadora[0]->precio} class="form-control">
                             
                    <input name="marcacomputadora" type="hidden" value={$computadora[0]->id_marca} class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Editar</button>
        </form>
        </div>

{include 'footer.tpl'}
