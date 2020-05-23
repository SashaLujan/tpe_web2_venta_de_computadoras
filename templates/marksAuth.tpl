{include 'templates/header.admin.tpl'}
    <div>    
        <h1>ABM DE MARCAS</h1>
        <b class="navbar-brand">Seleccione una opcion</b>
    </div>
    <form action="agregarMarca" method="POST">
        <label><b>Dar de Alta a una marca</b></label>
        <button type="submit"><b>Alta</b></button>
    </form>
    <div class="tablaMarca">
        <table class="table">
            <caption>LISTA DE MARCAS</caption>
            <thead>
                <tr>
                    <th class="thMarca">NOMBRE</th>
                    <th class="thMarca">MODIFICAR</th>
                    <th class="thMarca">ELIMINAR</th>
                </tr>
            </thead>
            <tbody>
                {foreach from=$listaMarca item=marca}
                    <tr>
                        <td>
                            <b>{$marca->nombre}</b>
                        </td>
                        <td>
                            <a href="editarMarca/{$marca->id_marca}">Modificar</a>    
                        </td>
                        <td>
                        <a href="eliminarMarca/{$marca->id_marca}">Eliminar</a>    
                        </td>
                    </tr>
                {/foreach}   
            </tbody>
        </table>
    </div>
    <a class="nav-link" href="elegirOpcion"><b>Volver</b></a>;
{include 'footer.tpl'}