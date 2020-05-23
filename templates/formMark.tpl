{include 'header.tpl'}
            <div class="contenedor">
                <div class="col-6">
                    <h1>Inserte una Marca</h1>
                    <form action="guardarMarca" method="POST" class="my-4">
                        <div class="form-group">
                            <label>Nombre</label>
                            <input name="nombre" type="text" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                     <a class="nav-link" href="listaMarca"><b>Volver</b></a>;
                </div>
            </div>
        </body>
    </html>
{include 'templates/footer.tpl'}