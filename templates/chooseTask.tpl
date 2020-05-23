{include 'header.admin.tpl'}
    <div>
        <b class="navbar-brand">Seleccione una opcion.</b>
        <form action="computadora" method="POST">
            <label><b>Altas/Bajas/Modificaciones de computadoras</b></label>
            <button type="submit"><b>Ir a ABM</b></button>
        </form>

        <form action="marca" method="POST">
            <label><b>Altas/Bajas/Modificaciones de marcas</b></label>
            <button type="submit"><b>Ir a ABM</b></button>
        </form>
    </div>
{include 'footer.tpl'}