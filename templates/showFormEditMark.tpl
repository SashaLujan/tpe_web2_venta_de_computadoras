{include 'templates/headerAdmin.tpl'}
    
    <div class="container">  
        <h1>Edite la marca {$item[0]->nombre}</h1>
        <form action="guardarEditMarca/{$item[0]->nombre}" method="post" class="my-4">
        <div class="form-group">
                    <input name="marca" type="hidden" value={$item[0]->id_marca} class="form-control">
                            <label>nombre</label>
                    <input name="nombreMarca" type="text" value={$item[0]->nombre} class="form-control">
            </div>
            <button type="submit" class="btn btn-danger">Editar</button>
        </form>
    </div>

{include 'templates/footer.tpl'}
