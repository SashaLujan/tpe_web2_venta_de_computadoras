{include 'headerAdmin.tpl'}
    <div>
        <b class="navbar-brand">Seleccione una opcion.</b>
        <form action="computadoras" method="POST">
            <label><b>Altas/Bajas/Modificaciones de computadoras</b></label>
            <button type="submit"><b>ABM</b></button>
        </form>

        <form action="marcas" method="POST">
            <label><b>Altas/Bajas/Modificaciones de marcas</b></label>
            <button type="submit"><b>ABM</b></button>
        </form>
    </div>
{include 'footer.tpl'}