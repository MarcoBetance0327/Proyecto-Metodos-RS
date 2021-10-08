<main class="contenedor seccion contenido-centrado contenedor-login">
    <h1>Registrarse</h1>

    <div class="div-login">
        <form method="POST" class="formulario" novalidate action="/login">
            <fieldset>
                <legend>Tu Información</legend>

                <label for="Nickname">Nickname</label>
                <input type="Nickname" name="Nickname" placeholder="Tu Nickname" id="Nickname">

                <label for="E-mail">E-mail</label>
                <input type="E-mail" name="E-mail" placeholder="Tu E-mail" id="E-mail">

                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Tu Password" id="password">

            </fieldset>

            <input type="submit" value="Registrarse" class="boton">
        </form>

        <div class="img-login">
            <img src="/build/img/registro.svg">
        </div>
    </div>
    
</main>
