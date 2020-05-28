{include 'templates/headerAdmin.tpl'}
    <form id="editComputer" action="guardarEditComp" method="POST">
        <h1>Realice los cambios que crea necesarios</h1>
        <input type="hidden" name="nombre" value="{$comutadora->id_comutadora}">
        <div class="fila_form_edit_comp">
            <label>nombre de la computadora</label>
            <input type="text" class="mayuscula" name="nombre" value="{$comutadora->nombre}">
        </div>
        <div class="fila_form_edit_comp">
            <label>Sistema Operativo</label>
            <input type="text" name="sistOperativo" value="{$comutadora->sistOperativo}">
        </div>
        <div class="fila_form_edit_comp">
            <label>marca</label>
            <select name="marca" value="{$computadora->id_computadora}">
                <option selected>{$computadora->id_computadora}</option>
                {foreach from=$listaComp item=computadora} 
                    <option>{$computadora->id_computadora}</option>
                {/foreach}
            </select>
        </div>
        <div class="fila_form_edit_comp">
            <label>FOTO</label>
            <input type="text" name="foto" value="{$computadora->imagen}">
        </div>
        <div class="fila_form_edit_comp">
            <button type="submit" class="btn btn-danger btn-volver"><b>Enviar</b></button>
            <a class="btn btn-danger btn-volver" href="listaComp"><b>Volver</b></a>;
        </div>

       {if {$error}}
            <div class="alert alert-danger">
                {$error}
            </div>
        {/if} 
    </form>
{include 'footer.tpl'}    
