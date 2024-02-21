<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="pico.min.css">
    <title>nype.mx - nuevo indispensable</title>
</head>
<body>
    <nav class="container-fluid">
        <ul>
            <li><strong>nype.mx</strong></li>
        </ul>
        <ul>
            <li><a href="#">Ejemplos</a></li>
            <li><a href="#" role="button">Agregar servicios</a></li>
        </ul>
    </nav>
    <main class="container">
        <div class="grid">
            <section>
                <hgroup>
                <center>
                    <h2>Nuevo NYPE Indispensable</h2>
                    <h3>Por favor llena los datos para empezar con tu nuevo NYPE</h3>
                </hgroup>
                <p>Estás a solo un paso del nuevo comercio electrónico</p>
                </center> 
                <form action="proceso_guardar.php" method="post" enctype="multipart/form-data">
                    
                    <label for="imagenNegocio">Selecciona Imagen</label>
                    <input type="file"  name="imagenNegocio" /><br>
                    <label for="businessName">Business Name:</label>
                    <input type="text" name="businessName" value=""><br>
                    <label for="service1">Servicio 1</label>
                    <input type="text" name="service1" value=""><br>
                    <label for="service2">Servicio 2:</label>
                    <input type="text" name="service2" value=""><br>
                    <label for="service3">Servicio 3:</label>
                    <input type="text" name="service3" value=""><br>
                    <label for="socialNetworks">Redes sociales:</label>
                    <input type="url"  name="socialNetworks" value=""><br>
                    <label for="whatsapp">WhatsApp:</label>
                    <input type="tel"  name="numero" value=""><br>
                    <button type="submit">Guardar </button>
                </form>
            </section>
        </div>
    </main>
    <footer class="container">
        <small><a href="/privacidad.html">Privacy Policy</a> • <a href="/TyC.html">Terms of Use</a></small>
    </footer>
</body>
</html>