{include 'templates/header.tpl'}
    <form action="guardar_usuario" method="POST">
        <h1>DATOS DEL USUARIO</h1>
        <label>Ingrese su nombre</label>
        <input type="text" placeholder="NOMBRE" name="nombre">
        <label>Ingrese su usuario (CORREO ELECTRÒNICO)</label>
        <input type="email" placeholder="EMAIL" name="email">
        <label>Ingrese la contraseña</label>
        <input type="password" placeholder="CONTRASEÑA" name="contraseña">
        <label>Repita la contraseña</label>
        <input type="password" placeholder="REPITA CONTRASEÑA" name="repitaContraseña">
        
        <button type="submit" class="btn btn-danger btn-volver"><b>Registrar</b></button>
        <a class="btn btn-danger btn-volver" href="#"><b>Salir</b></a>;
        {if $error}
            <div class="alert alert-danger contenedor-alert-usuario">
                {$error}
            </div>
        {/if}
    </form>
    
{include 'templates/footer.tpl'}