<section id="contacto" class="seccion">
    <h2>Solicitar Información</h2>
    <p>Déjanos tus datos y nos pondremos en contacto contigo sobre el alquiler de salas o hardware.</p>
    
    <form action="guardar.php" method="POST" class="formulario-contacto">
        
        <div class="grupo-form">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
        </div>

        <div class="grupo-form">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div class="grupo-form">
            <label for="telefono">Teléfono:</label>
            <input type="text" id="telefono" name="telefono">
        </div>

        <div class="grupo-form">
            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" rows="4" required></textarea>
        </div>

        <button type="submit" class="btn-enviar">Enviar Solicitud</button>
    </form>
</section>