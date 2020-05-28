{include 'templates/header.admin.tpl'}
    <div>    
        <h1>ABM de Marca</h1>
        <b class="navbar-brand">En esta sección usted podrá hacer ALTAS, BAJAS y MODIFICACIONES de marca.</b><br>
        <b class="navbar-brand">Seleccione una opcion.</b>
    </div>
    <form action="agregarMarca" method="POST">
        <label><b>Alta de Marca</b></label>
        <button type="submit"><b>Alta</b></button>
    </form>      

    <div class="contenedor_marca">
        <table class="table">
            <caption>Lista de Marcas</caption>
            <thead>
                <tr>
                    <th class="thMarca">nombre</th>
                    <th class="thMarca">editar</th>
                    <th class="thMarca">eliminar</th>
                </tr>
            </thead>
            <tbody>
                {foreach from=$listaMarca item=marca}
                    <tr>
                        <td>
                            <b>{$marca->nombre}</b>
                        </td>
                        <td>
                            <a href="editarMarca/{$marca->id_marca}">Editar</a>    
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
{include 'templates/footer.tpl'}