{include 'templates/headerAdmin.tpl'}
    <div>
        <h1>ABM de computadora</h1>
        <b class="navbar-brand">En esta sección usted podrá hacer ALTAS, BAJAS y MODIFICACIONES de computadoras.</b><br>
        <b class="navbar-brand">Seleccione una opcion.</b>
    </div>
    <div>
        <form action="agregarComp" method="POST">
            <label><b>Dar Alta</b></label>
            <button type="submit"><b>Alta</b></button>
        </form>
        <b class="navbar-brand">Para Editar o dar Baja a un Jugador deberá conocer su DNI</b>
        <form action="editarComp" method="POST">
            <label><b>Ingrese nombre</b></label>
            <input type="text" name="nombreComp">
            <button type="submit"><b>Editar</b></button>
        </form>

        <form action="eliminarComp" method="POST">
            <label><b>Ingrese nombre</b></label>
            <input type="text" name="nombreComp">
            <button type="submit"><b>Baja</b></button>
        </form>
    </div>
    <a class="nav-link" href="listaComp"><b>Volver</b></a>;
{include 'templates/footer.tpl'}