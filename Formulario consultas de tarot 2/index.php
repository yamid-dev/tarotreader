<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yamid Tarot en vivo</title>
    <link rel="stylesheet" href="css/styles.css">
    <title>Bienvenido a la Dinámica de Tarot</title>
    <style>
        .bocadillo {
            position: relative;
            background-color: #fff;
            padding: 10px 20px;
            border-radius: 8px;
            border: 2px solid #F2C53D;
            max-width: 250px;
            margin: 20px;
            margin-left: 60%;
            margin-top:-48%;
        }

        .bocadillo:before {
            content: "";
            position: absolute;
            top: 100%;
            left: 50%;
            margin-left: -10px;
            border-width: 10px;
            border-style: solid;
            border-color: #F2C53D transparent transparent transparent;
        }
    </style>
</head>
<body >
    <h1 class="titulo-1" id="tarotTitle">TAROT EN VIVO 🔴</h1>

    <script>
        const tarotTitle = document.getElementById('tarotTitle');
        let isEncendido = true;

        // Función para alternar el estado del título
        function alternarTextoTitulo() {
            isEncendido = !isEncendido;

            if (isEncendido) {
                tarotTitle.innerText = 'TAROT EN VIVO 🔴';
            } else {
                tarotTitle.innerText = 'TAROT EN VIVO ⚪';
            }
        }

        // Encender el título inicialmente
        alternarTextoTitulo();

        // Configurar un intervalo para alternar el estado cada 1000 milisegundos (1 segundo)
        setInterval(alternarTextoTitulo, 1000);
    </script><br><br>
    <div class="container">
        <!-- <div class="text-content">
            <h1>Bienvenid@ a esta dínamica de Tarot en vivo</h1><br>
            <h2>Requisitos para participar: </h2>
            <ul>
                <li>Compartir este live en diferentes lugares de facebook.</li>
                <li>Obtener el logo de distribuidores de contenido que se obtiene compartiendo este live.</li>
                <li>Después de obtener tu logo, comparte la pregunta que quieres hacer al tarot junto con tus datos.
                    <br><br>
                    <ol>
                        <li>Pregunta que sea lo más concreta, al grano, clara y especifica. </li>
                        <li>Nombres completos.</li>
                        <li>Fecha de nacimiento.</li>
                    </ol>       
                </li>
            </ul>
        </div> -->
        <div class="content">
            <form method="post" action="procesar_info.php">
                <img src="images/2-removebg-preview.png" alt="Yamid Tarot animado">
                <label for="name">Nombre completo: </label>
                <input type="text" id="name" name="name" placeholder="Nombre del participante">
                <label for="date">Fecha de nacimiento: </label>
                <input type="date" id="date" name="date" value="2023-01-01" placeholder="Fecha de nacimiento del participante" >
                <label for="question">Pregunta concreta: </label>
                <input type="text" id="question" name="question" placeholder="Pregunta concreta" >
                <section class="botons">
                    <input type="submit" id="env" name="env" value="Enviar">
                    <input type="submit" id="consult" name="consult" value="Consultar DB">
                </section>
            </form>
        </div>
        <!-- <div class="text-content-2">
            <h1>¿Cómo será la dínamica?</h1><br>
            <h2>Proceso: </h2>
            <ul>
                <li>Observaré qué personas aparecen con su logo de distribuidor en el chat del live.</li>
                <li>Seleccionaré una persona por orden de llegada y escribiré sus datos en el formulario.</li>
                <li>Enviaré el formulario para que se cargue a la base de datos.</li>
                <li>Una vez se complete el limite de participantes, cerraré el registro y se consulta las personas seleccionadas.</li>
                <li>Responderé a la pregunta de cada persona seleccionada, y que esté presente, mediante el Tarot.</li>
            </ul>
        </div> -->
    </div>  
    <div id="bocadillo" class="bocadillo" style="margin-top:-47.5%;">
      ¡Bienvenid@ a esta dinámica de tarot!
     </div>
     <script>
        const bocadillo = document.getElementById('bocadillo');
        let Encendido = true;

        // Función para alternar el estado del título
        function alternarTextoTitulo() {
            Encendido = !Encendido;

            if (Encendido) {
                bocadillo.style.textAlign="center";
                bocadillo.innerText = 'Por favor comparte este en vivo en todas partes.';
            } else {
                bocadillo.innerText = '¡Bienvenid@ a esta dinámica de tarot!';
            }
        }

        // Encender el título inicialmente
        alternarTextoTitulo();

        // Configurar un intervalo para alternar el estado cada 1000 milisegundos (1 segundo)
        setInterval(alternarTextoTitulo, 2300);
     </script>
     <div class="iconos">
        <div class="icon-container">
            <img src="./images/iconos/facebook.png" class="social" data-nombre="Facebook">
            <div class="nombre-red-social">@YAMIDOFICIAL</div>
        </div>
        <div class="icon-container">
            <img src="./images/iconos/whatsapp.png" class="social" data-nombre="WhatsApp">
            <div class="nombre-red-social">+573202808299</div>
        </div>
        <div class="icon-container">
            <img src="./images/iconos/instagram.png" class="social" data-nombre="Instagram">
            <div class="nombre-red-social">@tarotistayamidr</div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>

    $(document).ready(function() {
        $(".icon-container").on("click", function() {
        $(this).find(".nombre-red-social").toggle();
        });
    });
    </script>
    <p id="datetime"><span id="fechaYHora"></span><br>Colombia</p>

    <script>
        // Aquí se agregará la fecha y hora actual
        var fechaYHoraElemento = document.getElementById("fechaYHora");
        
        // Función para actualizar la fecha y hora
        function actualizarFechaYHora() {
            var fechaHoraActual = new Date();
            fechaYHoraElemento.innerHTML = fechaHoraActual.toLocaleString();
        }

        // Actualiza la fecha y hora cada segundo
        setInterval(actualizarFechaYHora, 1000);

        // Llama a la función para mostrar la fecha y hora inicial
        actualizarFechaYHora();
    </script>
</body>
</html>