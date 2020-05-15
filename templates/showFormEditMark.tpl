{include 'header.tpl'}

    <div class="container">
        <h1>Edite la marca</h1>
        <form action="editar_rubro" method="post" class="my-4">
            <div class="form-group">
                <label>Nombre</label>
                <input name="nombreMark" type="text" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Editar</button>
        </form>
    </div>