{include 'templates/header.tpl'}
    <div>
        <form action="guardar_usuario" method="POST">
            <h1>DATOS DEL USUARIO</h1>
            <label>Ingrese su nombre</label>
            <input type="text" name="nombre">
            <label>Ingrese su usuario (correo electronico)</label>
            <input type="email" name="email">
            <label>Ingrese la contraseña</label>
            <input type="password" name="contraseña">
            <label>Repita la contraseña</label>
            <input type="password" name="repitaContraseña">
            
            <button type="submit" class="btn btn-dark"><b>Registrar</b></button>
            <a class="btn btn-dark" href="#"><b>Salir</b></a>;
            {if $error}
                <div class="alert alert-danger contenedor-alert-usuario">
                    {$error}
                </div>
            {/if}
        </form>
    </div>
{include 'templates/footer.tpl'}