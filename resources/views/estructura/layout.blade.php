<!doctype html>
<!-- 
    Programación Web Avanzada 2021
    Trabajo práctico N° 3: Laravel
    @author Arian Acevedo / Sebastián Mon / Agustín Cerda
    @link https://github.com/sebamon/BestoGroupLaravel
-->

<html lang="es">
<head>
    <title><?php echo $Titulo?></title>
    <!-- Etiquetas meta requeridas -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Arian Acevedo / Sebastián Mon / Agustín Cerda">
    <!-- Icono web -->
    <link rel="shortcut icon" href="img/icon.png">
    <!-- CSS de Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link href="css/dataTables.bootstrap5.min.css"></link>
    <link rel="stylesheet" href="css/datatables.min.css"/>
    <link rel="stylesheet" href="css/bootstrap/bootstrapValidator.min.css">
    <!-- Jquery -->
    <script src="js/jquery/jquery.min.js"></script>    
    <!-- Mi estilo: -->
    <link rel="stylesheet" href="css/general.css">
    <!-- Iconos de Font Awesome (link personal) -->
    <script src="js/FontAwesome.js" crossorigin="anonymous"></script>
    <!-- Script para "Buscar en esta página" -->
    <script src="js/Buscador.js"></script>
</head>
<!-- Fin cabecera -->
<body class="container my-3">
    @include("estructura/menu")
    @yield('contenido')
<!-- Comienzo pie -->
<footer class=container>
    <!-- Bootstrap 5: cambia font-weight-bold por fw-bold -->
    <div class="row shadow-lg border rounded badge-info p-2 my-1 text-light" id=pie>
        <div class="col">
            <h5>La agencia Empleos TICS desea poder realizar las inscripciones a las búsquedas laborales online.</h5>
            <ul>
            Con este objetivo debemos:
                <li>Listar rubros con un link que nos permitan ver las búsquedas de cada rubro.</li>
                <li>Mostrar búsquedas laborales por rubro</li>
                <li>Permitir la inscripción de un postulante a una búsqueda laboral.</li>
                <li>Mostrar las inscripciones de una búsqueda laboral.</li>

            </ul>
        </div>
        <div class="col">
            <h5>Sebastián Mon<span class="fs-6 fst-italic"> - Leg. 114490</span> </h5>
            <h5>Arian Acevedo<span class="fs-6 fst-italic"> - Leg. FAI-1157</span></h5> 
            <h5>Agustín Cerda<span class="fs-6 fst-italic"> - Leg. 71853</span> </h5>
            <p>
            Trabajo práctico n°3 usando Laravel<br>
            Programación Web Avanzada<br>
            Año 2021<br>
            Universidad Nacional del Comahue
            </P>
        </div>
    </div>
</footer> <!-- Fin pie -->

<!-- Carga en orden JQuery (en header), Bootstrap+Popper y validador -->
<script src="js/bootstrap/bootstrap.bundle.min.js"></script>
<script src="js/bootstrap/bootstrapValidator.js"></script>
<script src="js/bootstrap/mensajesBVes_ES.js"></script>

<!-- Carga scripts propios -->
<script src="js/confirmarSalir.js"></script>
<script src="js/validaciones.js"></script>
<script src="js/volverArriba.js"></script>
<script src='js/jquery.dataTables.min.js'></script>
<script src="js/dataTables.bootstrap5.min.js"></script>
<script src="js/ajax.js"></script>

<button class="btn btn-info shadow-sm" onclick="irArriba()" id="volverArriba" title="Volver arriba"><i class="fas fa-chevron-up"></i></button>
</body>
</html>