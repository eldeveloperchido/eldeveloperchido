<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Maquina Virtual con Docker</title>

    <!-- Agregamos Bootstrap para un diseño bonito y rápido -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos personalizados -->
    <style>
        body {
            background-color: #f4f7f6;
            font-family: 'Arial', sans-serif;
            color: #333;
        }
        .card {
            margin: 20px;
        }
        .header {
            text-align: center;
            margin-top: 40px;
            margin-bottom: 50px;
        }
        .header h1 {
            font-size: 2.5rem;
            color: #007BFF;
        }
        .card-body h5 {
            font-size: 1.5rem;
            color: #333;
        }
        .card-body p {
            font-size: 1rem;
            color: #555;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="header">
        <h1>MI MAQUINA VIRTUAL CON DOCKER</h1>
    </div>

    <!-- Main Content -->

 <div class="container">
        <div class="row justify-content-center">
            <!-- Card 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="card shadow-lg">
                    <img src="https://via.placeholder.com/400x200.png?text=Docker" class="card-img-top" alt="Docker">
                    <div class="card-body">
                        <h5 class="card-title">Bienvenido a mi contenedor Docker</h5>
                        <p class="card-text">Este es un contenedor que está corriendo dentro de mi máquina virtual con Docker. ¡Es impresionante!</p>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="card shadow-lg">
                    <img src="https://via.placeholder.com/400x200.png?text=VM" class="card-img-top" alt="VM">
                    <div class="card-body">
                        <h5 class="card-title">Máquina Virtual</h5>
                        <p class="card-text">Estoy usando una máquina virtual que corre Docker, lo que me permite ejecutar contenedores de forma aislada y eficiente.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card 3 with PHP Name -->
        <div class="row justify-content-center mt-4">
            <div class="col-md-6 col-lg-4">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <h5 class="card-title">Mi Nombre</h5>
                        <!-- Aquí PHP insertará tu nombre -->
                        <p class="card-text">Hola, mi nombre es: <strong><?php echo "Tu Nombre Aquí"; // Cambia esto por tu nombre ?></strong>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>