{include 'templates/headerAdmin.tpl'}
    <div class="contenedor">
       <form action="guardarMarca" method="post" class="my-4">
            <h4>Agregue una marca nueva</h4>
            <div class="form-group">
                <label>Ingrese el nombre</label>
                <input name="nombre" type="text" class="form-control">
            </div>
            <button type="submit" class="btn btn-dark">Guardar</button>
            <a class="btn btn-dark" href="listaMarca"><b>Volver</b></a>;
        </form>
    </div>
    
{include 'templates/footer.tpl'}