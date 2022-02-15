<h1 class="nombre-pagina">Olvide mi contraseña</h1>
<p class="descripcion-pagina">Reestablese tu contraseña escribiendo tu email a continuacion</p>

<?php include_once __DIR__ . "/../templates/alertas.php"; ?>

<form action="/olvide" method="POST" class="formulario">
    <div class="campo">
        <label for="email">Correo de la cuenta</label>
        <input
            type="email"
            id="email"
            name="email"
            placeholder="Tu email"
        />
    </div>

    <input type="submit" class="boton" value="Enviar instrucciones">
</form>

<div class="acciones">
    <a href="/">¿Ya tienes una cuenta? Inicia sesión</a>
    <a href="/crear-cuenta">¿Aún no tienes una cuenta? ¡Crea una!</a>
</div>