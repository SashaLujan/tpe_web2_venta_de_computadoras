{include 'templates/headerAdmin.tpl'}
    
    <form id="addMarca" action="guardarEditMarca" method="POST">
        <h1>Realice los cambios que crea necesarios</h1>
        <input type="hidden" name="id_marca" value="{$marca->id_marca}">
        <label>nombre</label>
        <input type="text" name="nombreMarca" value="{$marca->nombre}">
        <button type="submit" class="btn btn-danger btn-volver"><b>Enviar</b></button>
        <a class="btn btn-danger" href="listaMarca"><b>Volver</b></a>;
        {if $error}
            <div class="alert alert-danger">
                {$error}
            </div>
        {/if} 
    </form>
    
{include 'templates/footer.tpl'}
