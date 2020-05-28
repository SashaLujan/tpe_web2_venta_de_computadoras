{include 'templates/headerAdmin.tpl'}
    <form action="guardarMarca" method="POST">
        <h1>Datos de la marca nueva</h1>
        <label>Nombre de la marca</label>
        <input type="text" name="nombreMarca">
        <button type="submit" class="btn btn-danger btn-volver"><b>Enviar</b></button>
        <a class="btn btn-danger" href="listaMarca"><b>Volver</b></a>;
        {if $error}
            <div class="alert alert-danger">
                {$error}
            </div>
        {/if}
    </form>
    
{include 'templates/footer.tpl'}