<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oleo+Script:wght@400;700&display=swap" rel="stylesheet">
    <title>senatareas</title>
    <link rel="stylesheet" href="../CSS/styles.css">

</head>

<body>
    <header>
        <div class="navbar">
            <div class="titulo">
                <a href="/index.php">
                    <h1>
                        SenaTareas
                    </h1>
                </a>

            </div>

            <div class="enlaces">
                <?php
                session_start();

                if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
                ?>
                    <a href="funciones/cerrar_sesion.php">
                        <div class="cerrar_cesion">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-login" width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="#f04c05" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M15 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
                                    <path d="M21 12h-13l3 -3" />
                                    <path d="M11 15l-3 -3" />
                                </svg>
                            </div>
                            <div>
                                <p>
                                    Cerrar cesion
                                </p>
                            </div>

                        </div>
                    </a>


                <?php
                } else {
                ?>

                    <a href="../login.php">
                        <div class="iniciar_cesion">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-login-2" width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="#f04c05" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M9 8v-2a2 2 0 0 1 2 -2h7a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-7a2 2 0 0 1 -2 -2v-2" />
                                    <path d="M3 12h13l-3 -3" />
                                    <path d="M13 15l3 -3" />
                                </svg>
                            </div>
                            <div>
                                <p>Iniciar Sesion</p>
                            </div>

                        </div>
                    </a>

                    <a href="/funciones/insertar_registro.php">
                        <div class="iniciar_cesion">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-edit" width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="#f04c05" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                    <path d="M6 21v-2a4 4 0 0 1 4 -4h3.5" />
                                    <path d="M18.42 15.61a2.1 2.1 0 0 1 2.97 2.97l-3.39 3.42h-3v-3l3.42 -3.39z" />
                                </svg>
                            </div>
                            <div>
                                <p>Registrarse</p>
                            </div>

                        </div>
                    </a>

                <?php
                }
                ?>

            </div>


        </div>
    </header>