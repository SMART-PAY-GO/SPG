<?php 
include_once "includes/header.php";
require "../conexion.php";

$usuarios = mysqli_query($conexion, "SELECT * FROM usuario");
$totalU= mysqli_num_rows($usuarios);
$clientes = mysqli_query($conexion, "SELECT * FROM cliente");
$totalC = mysqli_num_rows($clientes);
$productos = mysqli_query($conexion, "SELECT * FROM producto");
$totalP = mysqli_num_rows($productos);
$ventas = mysqli_query($conexion, "SELECT * FROM ventas");
$totalV = mysqli_num_rows($ventas);
?>
<div class="d-sm-flex align-items-center justify-content-center mb-4">
    <h1 class="h3 mb-0 p-4 rounded shadow-lg" 
        style="background-color: rgba(145, 145, 145, 0.514); 
               border-radius: 20px !important; 
               color: black; 
               border: 2px solid rgba(0, 0, 0, 0.514);">
        SMART PAY GO
    </h1>
</div>




<!-- Content Row -->
<div class="row">
    <a class="col-xl-3 col-md-6 mb-4" href="usuarios.php">
        <div class="card border-left-primary shadow h-100 py-2 bg-warning">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Usuarios</div>
                        <div class="h5 mb-0 font-weight-bold text-white"><?php echo $totalU; ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </a>

    <a class="col-xl-3 col-md-6 mb-4" href="clientes.php">
        <div class="card border-left-success shadow h-100 py-2 bg-success">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Clientes</div>
                        <div class="h5 mb-0 font-weight-bold text-white"><?php echo $totalC; ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </a>

    <a class="col-xl-3 col-md-6 mb-4" href="productos.php">
        <div class="card border-left-info shadow h-100 py-2 bg-primary">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Productos</div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-white"><?php echo $totalP; ?></div>
                            </div>
                            <div class="col">
                                <div class="progress progress-sm mr-2">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </a>

    <a class="col-xl-3 col-md-6 mb-4" href="ventas.php">
        <div class="card border-left-warning bg-danger shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Ventas</div>
                        <div class="h5 mb-0 font-weight-bold text-white"><?php echo $totalV; ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-white-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </a>

    <!-- Contenedor Unificado de Gráficas -->
    <div class="col-lg-12">
        <div class="grafica-container">
            <h3 class="grafica-titulo">Análisis de Productos</h3>
            <div class="row">
                <div class="col-lg-6">
                    <canvas id="sales-chart"></canvas>
                    <p class="grafica-subtitulo">Productos con stock mínimo</p>
                </div>
                <div class="col-lg-6">
                    <canvas id="polarChart"></canvas>
                    <p class="grafica-subtitulo">Productos más vendidos</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once "includes/footer.php"; ?>

<style>
    .grafica-container {
        background-color: rgba(248, 242, 242, 0.5);
        padding: 20px;
        border-radius: 25px;
        box-shadow: 5px 5px 15px rgba(0, 0, 0);
        max-width: 100%;
        text-align: center;
        margin-top: 60px;
        margin-bottom: 60px;
    }

    .grafica-titulo {
        color: rgb(0, 0, 0);
        margin-bottom: 20px;
        font-size: 1.5rem;
        font-weight: bold;
    }

    .grafica-subtitulo {
        margin-top: 10px;
        font-size: 1rem;
        color: #333;
        font-weight: bold;
    }

    canvas {
        width: 100% !important;
        height: auto !important;
    }
</style>
