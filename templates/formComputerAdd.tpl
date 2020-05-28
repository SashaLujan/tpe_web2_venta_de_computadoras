{include 'headerAdmin.tpl'}
    <form id="addComp" action="guardarComp" method="POST">
        <h1>Datos de la computadora nueva</h1>
        <label>Nombre de la computadora</label> 
        <input type="text" name="nombreComp">
        <label>Nombre de la marca</label> 
        <input type="text" name="nombreMarca">
        <label>Sistema Operativo</label> 
        <input type="text" name="sistOperativo">
        <select name="marca">
            <option disabled selected>Selecione una marca</option>
            {foreach from=$listaMarca item=marca} 
                <option>{$marca->id_marca_fk}</option>
            {/foreach}
        </select>
        <label>Ingrese una foto</label> 
        <input type="text" name="foto">
        <button type="submit" class="btn btn-danger"><b>Enviar</b></button>
        <a class="btn btn-danger btn-volver" href="listaComp"><b>Volver</b></a>;
        {if {$error}}
            <div class="alert alert-danger">
                {$error}
            </div>
        {/if}

    </form>
{include 'templates/footer.tpl'}