{include 'header.tpl'}
    <div>
        <h1>ABM DE COMPUTADORAS</h1>
        <b class="navbar-brand">Seleccione una opcion</b>
    </div>
    <div>
        <form action="agregarComputadora" method="POST">
            <label><b>Dar Alta a una computadora</b></label>
            <button type="submit"><b>Alta</b></button>
        </form>
        <b class="navbar-brand">Para poder ediar o dar de baja una computadora tendra que saber su id</b>
        <form action="editarComputadora" method="POST">
            <label><b>Ingrese id de la computadora</b></label>
            <input type="text" name="id_computadora">
            <button type="submit"><b>Modificar</b></button>
        </form>

        <form action="eliminarComputadora" method="POST">
            <label><b>Ingrese id de la computadora</b></label>
            <input type="text" name="id_computadora">
            <button type="submit"><b>Baja</b></button>
        </form>
    </div>
    <a class="nav-link" href="elegirOpcion"><b>Volver</b></a>;
{include 'footer.tpl'}