<?php include 'includes/header.php'; ?>


<div class="form_fondo">
    <div class="form_registro">
        <form method="post" action="">
            <fieldset>
                <legend>Crear Cuenta</legend>
                <div class="camposRegistro">

                    <div class="campo">
                        <label for="identifica">Identificación</label>
                        <input type="text" id="identifica" name="identifica" placeholder="identificación" required>
                    </div>
                    <div class="campo">
                        <label for="nombre1">Primer nombre</label>
                        <input type="text" id="nombre1" name="nombre1" placeholder="escriba su primer nombre" required>
                    </div>
                    <div class="campo">
                        <label for="nombre2">Segundo nombre</label>
                        <input type="text" id="nombre2" name="nombre2" placeholder="escriba su segundo nombre">
                    </div>
                    <div class="campo">
                        <label for="apellido1">Primer apellido</label>
                        <input type="text" id="apellido1" name="apellido1" placeholder="escriba su apellido" required>
                    </div>
                    <div class="campo">
                        <label for="apellido2">Segundo apellido</label>
                        <input type="text" id="apellido2" name="apellido2" placeholder="escriba su apellido">
                    </div>
                    <div class="campo">
                        <label for="fecha_nac">Fecha De Nacimiento</label>
                        <input type="date" id="fecha_nac" name="fecha_nac" placeholder="Ingresa Su Fecha de Nacimiento">
                    </div>
                    <div class="campo">
                        <label for="celular">Telefono</label>
                        <input type="text" id="celular" name="celular" placeholder="Ingresa Su Numero De Celular">
                    </div>
                    <div class="campo">
                        <label for="email">Correo</label>
                        <input type="email" id="email" name="email" placeholder="correo@gmail.com" required>
                    </div>
                    <div class="campo">
                        <label for="contra">Contraseña</label>
                        <input type="password" id="contra" name="contra" placeholder="escriba una clave segura" required>
                    </div>
                
                    <div class="campo">
                        <input type="submit" value="Crear cuenta" class="btn">
                    </div>
                </div>    
            </fieldset>    
        </form>    
    </div>    
</div>    

<?php 

function capturarDatos()
{
    if($_SERVER['REQUEST_METHOD']== "POST"){
        
        return $_POST;

    }
}

include '../includes/footer.php'; 
