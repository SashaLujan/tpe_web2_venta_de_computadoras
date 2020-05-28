{include 'templates/header.tpl'}
    <div class="container">
        <h1>Inserte una marca</h1>
        <form action="agregarMarca" method="post" class="my-4">
            <div class="form-group">
                <label>nombre</label>
                    <input name="nombreMarca" type="text" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
    
{include 'templates/footer.tpl'}