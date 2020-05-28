{include 'templates/header.admin.tpl'}
    {if $isAdmin}
    <table class='table table-hover table-striped table-bordered table table-condensed' style='width:900px'>
        <tr>
            <th scope='col'><h2>marcas</h2></th>
            <th scope='col'><a class="navbar-brand" href="formAltaItem">Alta</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span> </button>
            </th>
        </tr>
    </table>
 {/if}

<table class='table table-hover table-striped table-bordered table table-condensed' style='width:400px'>
       <tr>
          <th scope='col'>marca</th>
       </tr>
        {foreach $listaMarca item= marca} 
        <tr>
             <td><a href="comp_marca/{$marca->id_marca}" class='btn btn-link'>{strtoupper($marca->nombre)}</a>  
             {if $isAdmin}             
                  <td> <a href='eliminarMarca/{$marca->id_marca}' class='btn btn-link'>Borrar </a></td>
                  <td> <a href='editarMarca/{$marca->id_marca}' class='btn btn-link'>Editar </a></td>
              {/if}
        </tr>
            {/foreach}
{include 'templates/footer.tpl'}