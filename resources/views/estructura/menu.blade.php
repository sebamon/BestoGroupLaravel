<!-- Comienzo menú de navegación -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark border rounded shadow-lg">
    <div class=container-fluid> <!-- Comienzo contenedor - Desde Bootstrap 5 -->

        <a class="navbar-brand">El Bolsón - Turismo</a>

        <!-- Bootstrap 5: cambia data-toggle y data-target por data-bs-toggle y data-bs-target-->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#MenuSuperior" aria-controls="MenuSuperior" aria-expanded="false" aria-label="Menú superior">
            <span class="navbar-toggler-icon"></span>
        </button> <!-- Fin botón desplegable en pantallas chicas-->

        <div class="collapse navbar-collapse" id="MenuSuperior"> <!-- Comienzo contenido menú -->
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="ListaTP1" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    TP1: Bootstrap
                    </a>
                    <div class="dropdown-menu" aria-labelledby="ListaTP1">
                        <a class="dropdown-item" href="../TP1/TP1ej1.html">Ej1: Config ambiente</a>
                        <a class="dropdown-item" href="../TP1/TP1ej2.html">Ej2: Usando Tabs</a>
                        <a class="dropdown-item" href="../TP1/TP1ej3.html">Ej3: Columnas de información</a>
                        <a class="dropdown-item" href="../TP1/TP1ej4.html">Ej4: Columnas de colores</a>
                        <a class="dropdown-item" href="../TP1/TP1ej5.html">Ej5: Columnas en offset</a>
                        <a class="dropdown-item" href="../TP1/TP1ej6.html">Ej6: Columnas de contenido</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="ListaTP1" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    TP2: AJAX y JQuery
                    </a>
                    <div class="dropdown-menu" aria-labelledby="ListaTP2">
                        <a class="dropdown-item" href="../TP2/TP2ej1.php">Ej1: Selects dependientes</a>
                        <a class="dropdown-item" href="../TP2/TP2ej2.php">Ej2: Pestañas de contenido</a>
                        <a class="dropdown-item" href="../TP2/TP2ej3.php">Ej3: Imágenes con modales</a>
                        <a class="dropdown-item" href="../TP2/TP2ej4.php">Ej4: Formulario con validaciones</a>
                        <a class="dropdown-item" href="../TP2/TP2ej5.php">Ej5: Tabla paginada</a>
                    </div>
                </li>
            </ul>
            <!-- Bootstrap 5: form-inline no se usa más, hay que usar row-cols dentro de form y varios div para cada elemento -->
            <form class="row row-cols-lg-auto g-1 my-2 my-lg-0">
            <div class=col-12>
                <input class="form-control mr-sm-2" name="buscador" id="TextoABuscar" type="search" placeholder="Buscar en esta página" aria-label="Search" onkeydown="leerEnterB(event)"title="Seleccionar la coincidencia">
            </div>
            <div class=col-12>
                <button class="btn btn-outline-light my-2 my-sm-0" onclick="buscarEnPagina( document.getElementById('TextoABuscar').value )" type="button" id=Buscar title="Seleccionar la coincidencia">Buscar</button>
            </div>
            </form> <!-- Fin buscador -->
        </div> <!-- Fin contenido desplegable en pantallas chicas -->

    </div> <!-- Fin contenedor - Desde Bootstrap 5 -->
</nav> <!-- Fin menú de navegación -->