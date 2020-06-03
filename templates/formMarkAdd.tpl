{include 'templates/headerAdmin.tpl'}
    <div class="container">
        <h1>Inserte una marca</h1>
        <form action="guardarMarca" method="post" class="my-4">
            <div class="form-group">
                <label>nombre</label>
                    <input name="nombre" type="text" class="form-control">
            </div>
            <button type="submit" class="btn btn-danger">Guardar</button>
            <a class="btn btn-danger" href="listaMarca"><b>Volver</b></a>;
        </form>
    </div>
    
{include 'templates/footer.tpl'}