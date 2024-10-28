<?php include 'includes/header.php';?>

<div class="login">
    <div class="login_logo">
    </div>
    <div class="login_form">
        <from action ="" method ="post">
            <fieldset>
            <legend>Iniciar Sesion</legend>
                <div class ="campo">

                    <div class = "form_registro">

                        <div class="campo">
                            <label for="usu"> Usuario</label>
                            <input type="text" placeholder="example@correo.com" id="usu" required name="email">

                        </div>

                        <div class="campo">
                            <label for="pass">Contraseña</label>
                            <input type="password" name="password" id="pass" placeholder="valide su usuario" required>

                        </div>

                        <div class="campo">
                            <button type="submit" class="btn">Iniciar Sesión</button>
                        </div>
                    </div>
                </div>



            </fieldset>
        </from>   
    </div>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST['email'];
    $password = $_POST['password'];
    session_start();
    try {
        require 'includes/conexion_bd.php';
        $sql ="SELECT email, contra, rol FROM usuarios WHERE
        email= '$correo' ";
        $consulta = mysqli_query($coneccion, $sql);
        $resul = mysqli_fetch_assoc($consulta);

        if ($_POST['password'] == $result ['contra']) {
            $_SESSION['nombre'] = $result ['nombre'];
            $_SESSION['rol'] = $result ['rol'];
            header('location: panel_principal.php'); } else
            echo('Usuario y/o contraseña no son correctos');
        } catch (\Throwable $th) {
        echo($th);
        }
    }

include 'includes/footer.php';