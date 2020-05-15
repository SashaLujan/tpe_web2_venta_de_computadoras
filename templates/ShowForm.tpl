{include 'header.tpl'}

<div class="container">
        <h1>Inserte una Computadora</h1>
        <div class="row">
        <div class="col-6">
        <form action="altacomputadora" method="post" class="my-4">
            <div class="form-group">
                <label>Nombre</label>
                <input name="nombre" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>Marca</label>
                <input name="marca" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>Sistema Operativo</label>
                <input name="sistOperativo" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>id_marca</label>
                <input name="id_marca" type="text" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
        </div>
        <div class="col-6">
        <h1>Inserte una Marca</h1>
        <form action="altaMark" method="post" class="my-4">
            <div class="form-group">
                <label>Nombre</label>
                <input name="nombreMark" type="text" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
        </div>
    </body>
</html>