<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css">
    <link rel="stylesheet" href="nuevo.css">
    <title><?php echo htmlspecialchars($_POST['businessName'] ?? '[ERROR]'); ?> - nype.mx</title>
</head>
<body>

    <nav class="container-fluid">
        <ul>
            <li><strong>nype.mx</strong></li>
        </ul>
        <ul>
            <li><a href="#">Iniciar sesion</a></li>
            <li><a href="#">Testimonios</a></li>
            <li><a href="#" role="button">Contacto</a></li>
        </ul>
    </nav>
    <main class="container">
        <div class="grid">
            <section>
<!-- codigo para mostrar la imagen desde la base de datos -->
 <?php
// Incluir el archivo de conexión a la base de datos
include("conexion.php");

// Consultar la base de datos para obtener la imagen y el nombre
$sql = "SELECT imagen, nombre, servicio_1, servicio_2, servicio_3, redes, numero FROM spas WHERE id_spa = 2"; // Cambia '2' por el id correcto
$resultado = $conn->query($sql);
if ($resultado->num_rows > 0) {
    // Mostrar los datos en la página
    while($row = $resultado->fetch_assoc()) {
        $imagen = $row["imagen"];
        $nombre = $row["nombre"];
        $servicio1 = $row["servicio_1"];
        $servicio2 = $row["servicio_2"];
        $servicio3 = $row["servicio_3"];
        $redes = $row["redes"];
        $numero = $row["numero"];
    }
} else {
    echo "No se encontraron resultados";
}

// Cerrar la conexión a la base de datos
$conn->close();
?>

<!-- Mostrar la imagen y el nombre en la página -->
<h1><?php echo $nombre; ?></h1>
<center>
<img src="data:image/jpg;base64,<?php echo base64_encode($imagen); ?>" alt="<?php echo $nombre; ?>"style="max-width: 700px; max-height: 1500px;"> 
</center>
                    
                <h2>Servicios Ofrecidos:</h2>
                    <div class="appointmentGrid">
                        <section>
                            <hgroup>
                            <h3><?php echo $servicio1; ?></h3>
                                <h4>Reservar</h4>
                            </hgroup>
                            <div class="appointment-card" id="service1-card">
                                <a class="date-link" href="javascript:void(0);" onclick="changeDate(-1, 'service1-card', 'service1-date')">&lt;</a>
                                - 1 día +
                                <a class="date-link" href="javascript:void(0);" onclick="changeDate(1, 'service1-card', 'service1-date')">&gt;</a>
                                <div class="date-navigation" id="service1-date">
                                    <?php
                                    $today = date("F j, Y");
                                    echo "<p style=\"color:black;\"><strong>$today</strong></p>";
                                    ?>
                                    </div>
                                    <button onclick="openModal();">09:00 AM</button>
                                    <button onclick="openModal();">10:00 AM</button>
                                    <button onclick="openModal();">02:00 PM</button>
                                    <button onclick="openModal();">05:00 PM</button>
                                    <button onclick="openModal();">06:00 PM</button>
                                    <button onclick="openModal();">07:00 PM</button>
                            </div>
                        </section>
                    </div>
                <div class="appointmentGrid">
                    <section>
                        <hgroup>
                        <h3><?php echo $servicio2; ?></h3>
                            <h4>Reservar</h4>
                        </hgroup>
                        <div class="appointment-card" id="service2-card">
                        <a class="date-link" href="javascript:void(0);" onclick="changeDate(-1, 'service2-card', 'service2-date')">&lt;</a>
                        - 1 dia +
                        <a class="date-link" href="javascript:void(0);" onclick="changeDate(1, 'service2-card', 'service2-date')">&gt;</a>
                        <div class="date-navigation">
                        <?php
                        $today = date("F j, Y");
                        echo "<p style=\"color:black;\"><strong>$today</strong></p>";

                        ?>
                        </div>
                            <button onclick="openModal();">09:00 AM</button>
                            <button onclick="openModal();">10:00 AM</button>
                            <button onclick="openModal();">02:00 PM</button>
                            <button onclick="openModal();">05:00 PM</button>
                            <button onclick="openModal();">06:00 PM</button>
                            <button onclick="openModal();">07:00 PM</button>
                        </div>
                    </section>
                </div>
                <div class="appointmentGrid">
                    <section>
                        <hgroup>
                        <h3><?php echo $servicio3; ?></h3>
                            <h4>Reservar</h4>
                        </hgroup>
                        <div class="appointment-card" id="service3-card">
                        <a class="date-link" href="javascript:void(0);" onclick="changeDate(-1, 'service1-card', 'service1-date')">&lt;</a>
                        - 1 dia +
                        <a class="date-link" href="javascript:void(0);" onclick="changeDate(1, 'service1-card', 'service1-date')">&gt;</a>
                        <div class="date-navigation">
                        <?php
                        $today = date("F j, Y");
                        echo "<p style=\"color:black;\"><strong>$today</strong></p>";

                        ?>
                        </div>       
                            <button onclick="openModal();">09:00 AM</button>
                            <button onclick="openModal();">10:00 AM</button>
                            <button onclick="openModal();">02:00 PM</button>
                            <button onclick="openModal();">05:00 PM</button>
                            <button onclick="openModal();">06:00 PM</button>
                            <button onclick="openModal();">07:00 PM</button>
                        </div>
                    </section>
                </div>
                <!--
                <div class="appointmentGrid">
                    <section>
                        <hgroup>
                            <h3> <?php echo htmlspecialchars($_POST['service2'] ?? '[Dato no proporcionado]'); ?></h3>
                            <h4>Reservar</h4>
                        </hgroup>
                        <div class="appointment-card">
                        <?php
                        $today = date("F j, Y");
                        echo "<p style=\"color:black;\"><strong>$today</strong></p>";
                        ?>
                            <p>
                                <div><a href="#">09:00 AM</a></div>
                                <div><a href="#">10:00 AM</a></div>
                                <ul>
                                    <li><a href="#">02:00 PM</a></li>
                                    <li><a href="#">05:00 PM</a></li>
                                </ul>
                            </p>
                            <button onclick="openModal();">06:00 PM</button>
                            <button onclick="openModal();">07:00 PM</button>
                        </div>
                    </section>
                </div>
                <div class="appointmentGrid">
                    <section>
                        <hgroup>
                            <h3> <?php echo htmlspecialchars($_POST['service3'] ?? '[Dato no proporcionado]'); ?></h3>
                            <h4>Reservar</h4>
                        </hgroup>
                        <div class="appointment-card">
                        <?php
                        $today = date("F j, Y");
                        echo "<p style=\"color:black;\"><strong>$today</strong></p>";
                        ?>
                            <p>
                                <div><a href="#">09:00 AM</a></div>
                                <div><a href="#">10:00 AM</a></div>
                                <ul>
                                    <li><a href="#">02:00 PM</a></li>
                                    <li><a href="#">05:00 PM</a></li>
                                </ul>
                            </p>
                            <button onclick="openModal();">06:00 PM</button>
                            <button onclick="openModal();">07:00 PM</button>
                        </div>
                    </section>
                </div>
-->
                <div class="contactGrid">
                <section>
                        <hgroup>
                            <h1>Enlaces a Redes Sociales:</h1>
                        </hgroup>
                        <p><a href="<?php echo $redes; ?>"><?php echo $redes; ?></a></p>
                        <hgroup>
                        <h3>WhatsApp:</h3>
                        </hgroup>
                        <p>WhatsApp: <a href="https://wa.me/<?php echo $numero; ?>"><?php echo $numero; ?></a></p>
                </section>
                </div>
            </section>
        </div>
    </main>
    <footer class="container">
        <small><a href="#">Política de Privacidad</a> • <a href="#">Términos de Uso</a></small>
    </footer>
    <!-- The Modal -->
    <div id="myModal" class="modal">
    <div class="container">
        <article>
            <hgroup>
                <h2>Reservar ahora</h2>
                <h3>Detalles de masaje</h3>
            </hgroup>
            <form class="grid">
                <input type="text" id="firstname" name="firstname" placeholder="First Name" aria-label="First Name" required="">
                <input type="email" id="email" name="email" placeholder="Email" aria-label="Email" required="">
                <input type="text" id="whatsapp" name="whatsapp" placeholder="WhatsApp" aria-label="WhatsApp" required="">
                <button type="submit" onclick="enviarDatos();">Reservar</button>
                <button class="cancel-button" onclick="closeModal();">Cancelar</button>
            </form>
        </article>
    </div>
        <!-- Modal content 
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2>Reserve Your Spot</h2>
            <h3>Enter your details</h3>
            <form class="grid">
                <input type="text" id="firstname" name="firstname" placeholder="First Name" aria-label="First Name" required="">
                <input type="email" id="email" name="email" placeholder="Email" aria-label="Email" required="">
                <button type="submit" onclick="event.preventDefault();">Submit</button>
            </form>
        </div>
        -->
    </div>

    <script>
    // Función para abrir el modal
    function openModal() {
        var modal = document.getElementById("myModal");
        modal.style.display = "block";
    }
    
    // Función para cerrar el modal
    function closeModal() {
        var modal = document.getElementById("myModal");
        modal.style.display = "none";
    }
    
    // Cierra el modal si se hace clic fuera de él
    window.onclick = function(event) {
        var modal = document.getElementById("myModal");
        if (event.target === modal) {
            modal.style.display = "none";
        }
    }
    function enviarDatos() {
    // Obtener datos del formulario
    var firstname = document.getElementById("firstname").value;
    var email = document.getElementById("email").value;
    var whatsapp = document.getElementById("whatsapp").value;

    // Crear objeto FormData para enviar datos al servidor
    var formData = new FormData();
    formData.append("firstname", firstname);  
    formData.append("email", email);
    formData.append("whatsapp", whatsapp);

    // Enviar datos a tu archivo PHP usando AJAX
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            // Manejar la respuesta del servidor si es necesario
            console.log(this.responseText);
        }
    };
    xhttp.open("POST", "nype.php", true);
    xhttp.send(formData);
}

    </script>

    <?php
        include 'conexion.php'; // archivo de conexión

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $firstname = $_POST['firstname'];
            $email = $_POST['email'];
            $whatsapp = $_POST['whatsapp'];
        }
        // Realizar la inserción en la base de datos
        if (!empty($firstname) && !empty($email) && !empty($whatsapp)) {
        $sql = "INSERT INTO cliente (firstname, email, whatsapp) VALUES ('$firstname', '$email', '$whatsapp')";

        if ($conn->query($sql) === TRUE) {
            echo "Datos insertados correctamente";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
$conn->close();
?>

<script>
// Función para cambiar la fecha
function changeDate(daysToAdd, cardId, dateId) {
    var currentDate = new Date();
    currentDate.setDate(currentDate.getDate() + daysToAdd);
    updateDate(currentDate, dateId);
    updateTimes(cardId);
}

// Función para actualizar la fecha mostrada
function updateDate(currentDate, dateId) {
    var dateElement = document.getElementById(dateId);
    dateElement.innerHTML = "<p style=\"color:black;\"><strong>" + currentDate.toLocaleDateString("en-US", { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' }) + "</strong></p>";
}

// Función para actualizar los horarios
function updateTimes(cardId) {
    var timeSlots = document.getElementById(cardId).querySelector(".time-slots");

    // Puedes actualizar los horarios aquí con los nuevos horarios para la fecha actual
    // Por ejemplo, aquí se borra todo el contenido y se agrega uno nuevo
    timeSlots.innerHTML = `
    <div><a href="#">09:00 AM</a></div>
    <div><a href="#">10:00 AM</a></div>
    <ul>
        <li><a href="#">02:00 PM</a></li>
        <li><a href="#">05:00 PM</a></li>
    </ul>
    <button onclick="openModal();">06:00 PM</button>
    <button onclick="openModal();">07:00 PM</button>
  `;
}

// Llama a las funciones de inicialización para cada instancia
updateDate(new Date(), 'service1-date');
updateTimes('service1-card');
// También puedes llamar a las funciones para service2 y service3 si es necesario
</script>





</body>
</html>