{include 'header.tpl'}

<h2>Marcas disponibles</h2>
<table class='table table-hover table-striped table-bordered table table-condensed' style='width:400px'>
       <tr style='color:black'><th scope='col'>MARCA</th>
        {foreach $listamarca item= marca}
           <tr>
             <td><a href='computadora_por_marca/{$marca->id_marca}' class='btn btn-link '>{strtoupper($marca->nombre)}</a>  
             {if $esadmin==1}
                  <td> <a href='borrar_marca/{$marca->id_marca} class='btn btn-link>Borrar </a></td>
                  <td> <a href='editar_marca/{$marca->id_marca} class='btn btn-link>Editar </a></td>
              {/if}
            </tr>
        {/foreach}