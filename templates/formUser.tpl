{include 'templates/header.tpl'}
    <div class="contenedor">
        <form action="guardar_usuario" method="POST">
            <h1>DATOS DEL USUARIO</h1>
            <div class="form-group">
                <label>Ingrese su nombre</label>
                <input type="text" name="nombre" value="{$nombre}">
            </div>
            <div class="form-group">
                <label>Ingrese su correo electronico</label>
                <input type="email" name="email"  value="{$mail}">
            </div>
            <div class="form-group">
                <label>Ingrese la contraseña</label>
                <input type="password" name="contraseña">
            </div>
            <div class="form-group">
                <label>Repita la contraseña</label>
                <input type="password" name="repitaContraseña">
            </div> 
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