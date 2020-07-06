<!DOCTYPE html>
    <html lang="en">
        <head>
            <base href="{BASE_URL}">
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>TECNO</title>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
            <link rel="icon" href="imagenes/logo.jpeg">
            <link rel="stylesheet" href="css/styles.css">
            <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        </head>
        <body>
            <nav class="navbar navbar-expand-lg navbar-light bg-light navbar navbar-dark bg-dark">
                <a class="navbar-brand" href="#"><b>Computadoras Online</b></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="home">HOME</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="listaComp">COMPUTADORAS</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="listaMarca">MARCAS</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="registrarse">REGISTRARSE</a>
                        </li>
                    </ul>
                </div>
            
                <div class="login-container">
                    <form action="loguearse" method="POST">
                        {if !$isAdmin}
                        <input type="text" placeholder="username" name="username">
                        <input type="password" placeholder="Password" name="contraseña">
                        <button type="submit">Login</button>
                        {/if}
                        {if $isAdmin}
                        <a class="navbar-brand" href='cerrar_sesion'><p class="">Usuario: {$administrador}</p>  Logout </a>
                        {/if}
                    </form>
                    <div class="contenedor-olvide-contraeña">
                        <a class="nav-link" href="recuperar_contraseña">Olvidé la Contraseña<span class="sr-only">(current)</span></a>
                    </div>
                </div>
            </nav>
