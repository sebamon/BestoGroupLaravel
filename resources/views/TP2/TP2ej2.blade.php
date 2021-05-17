@extends("../estructura/layout")

@section("contenido")

<?php $Titulo = "Ej2: Pestañas de contenido"; ?>

<main class="container p-2 shadow-lg" id=cuerpo> <!-- Comienzo main cuerpo-->
<!-- Bootstrap 5: jumbotron discontinuado -->
<div class="card bg-light border rouded-3 p-2 m-auto"> <!-- Comienzo div introducción -->
    <h1 class="display">El Bolsón es mágico por naturaleza</h1>
    <hr class="my-2">
    <p class="lead">
    En cada amanecer que emerge por entre la bruma del valle, en cada atardecer que se disuelve en destellos dorados, en cada mañana de invierno que la nieve cubre los cerros con el silencio y en cada noche, cuando millones de estrellas alumbran sobre el techo negro que sostienen los cerros…<br>
    <br>
    El Bolsón lleva la magia en el aire y esa magia es contagiosa: late en quienes aquí viven y también en los que están de paso. Porque… quien pasa no puede menos que sentirse vivo, y quien vive aquí… también está de paso.<br>
    </p>
</div> <!-- Fin div introducción -->

<hr class="my-2">

<nav id=resumen> <!-- Comienzo tabs -->
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <button class="nav-link active" id="nav-comarca-tab" data-bs-toggle="tab" data-bs-target="#nav-comarca" type="button" role="tab" aria-controls="nav-comarca" aria-selected="true">
            <span class=fw-bold>El Bolsón y La Comarca</span>
        </button>
        <button class="nav-link" id="nav-clima-tab" data-bs-toggle="tab" data-bs-target="#nav-clima" type="button" role="tab" aria-controls="nav-clima" aria-selected="false">
            <span class=fw-bold>El Clima en El Bolsón</span>
        </button>
        <button class="nav-link" id="nav-ubicacion-tab" data-bs-toggle="tab" data-bs-target="#nav-ubicacion" type="button" role="tab" aria-controls="nav-ubicacion" aria-selected="false">
            <span class=fw-bold>Cómo llegar</span>
        </button>
        <button class="nav-link" id="nav-productos-tab" data-bs-toggle="tab" data-bs-target="#nav-productos" type="button" role="tab" aria-controls="nav-productos" aria-selected="false">
            <span class=fw-bold>Productos regionales</span>
        </button>
    </div>
</nav>
<div class="tab-content bg-light p-2" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-comarca" role="tabpanel" aria-labelledby="nav-comarca-tab">
        <!-- Contenido dinámico por AJAX -->
        <div class="d-flex justify-content-center align-items-center">
            <img src="img/TP1/icon.png" class="img-fluid" alt="Icono placeholder">
            <span class=fst-italic>Haz click en una pestaña para ver el contenido...</span>
        </div>
    </div> <!-- Fin div nav-comarca -->
    <div class="tab-pane fade" id="nav-clima" role="tabpanel" aria-labelledby="nav-clima-tab">
        <!-- Contenido dinámico por AJAX -->
    </div> <!-- Fin div nav-clima -->
    <div class="tab-pane fade" id="nav-ubicacion" role="tabpanel" aria-labelledby="nav-ubicacion-tab">
        <!-- Contenido dinámico por AJAX -->
    </div> <!-- Fin div nav-ubicacion -->
    <div class="tab-pane fade" id="nav-productos" role="tabpanel" aria-labelledby="nav-productos-tab">
        <!-- Contenido dinámico por AJAX -->
    </div> <!-- Fin div nav-productos -->
</div> <!-- Fin tabs -->
<cite>Fuente: <a href="hhttp://www.elbolson.com/secciones/turismo/informacion_general/informacion_general.html">http://www.elbolson.com/secciones/turismo/informacion_general/informacion_general.html</a></cite>

<hr class="my-2">

<div class="container p-2"> <!-- Comienzo div plano -->
    <h2 id=plano>Plano de El Bolsón y alrededores</h2>
    <a href="img/TP1/plano.jpg">
        <img src="img/TP1/plano.jpg" class="img-fluid img-thumbnail" alt="Plano de El Bolsón y alrededores">
        <br>
        <cite>Haz click en la imagen o aquí para ampliar.</cite>
    </a>
</div> <!-- Fin div plano -->

<div class="container p-2"> <!-- Comienzo div 4 columnas -->
    <h2 id=comarca>Comarca Andina del Paralelo 42</h2>
    <div class="row gx-2">
        <div class="border border-info rounded col-sm-12 col-md-6 col-xl-3">
        <img src="img/TP1/comarca1.jpg" class="img-fluid img-thumbnail mb-2" alt="Lago Puelo">
        <p>
            Ocupando el noroeste de la Provincia de Chubut y el sudoeste del la Provincia de Río Negro, la Comarca Andina del Paralelo 42 es una de las propuestas apasionantes que la Patagonia Argentina tiene preparada para quienes deseen inmiscuirse entre sus majestuosos paisajes. Con las imponentes montañas cordilleranas de fondo, todos los itinerarios invitan a contactarse plenamente con la naturaleza autóctona que ostenta esta región.
        </p>
        <p>
            Conformada por las localidades de El Bolsón, El Hoyo, El Maitén, Lago Puelo, Epuyen y Cholila, los paisajes de esta porción sureña aparecen salpicados por cristalinos ríos que bajan desde las alturas; lagos de un azul intenso; bosques enmarañados; cumbres siempre nevadas; y un sinfín de sorpresas más, que imponen las actividades al aire libre como la mejor manera de descubrir la desmesurada belleza que domina estas latitudes.
        </p>
        </div>
        <div class="border border-info rounded col-sm-12 col-md-6 col-xl-3">
        <img src="img/TP1/comarca2.jpg" class="img-fluid img-thumbnail mb-2" alt="El Bolsón">
        <p>
            Dentro de la comarca también se encuentran el Parque Nacional Lago Puelo y la porción norte del Parque Nacional Los Alerces, dos oportunidades para emprender excursiones terrestres o lacustres y admirar la atrapante combinación de la flora y la fauna autóctona.
        </p>
        <p>
            Partiendo desde El Bolsón las sorpresas no se hacen esperar: el Cerro Piltriquitrón, el Bosque Tallado, y el Valle del Río Azul son los lugares indicados para quienes ansíen encontrarse cara a cara con las postales andinas. El Trekking, las Caminatas, y las Travesías en 4X4 son algunas de las alternativas para mimetizarse con este paraíso terrenal.
        </p>
        </div>
        <div class="border border-info rounded col-sm-12 col-md-6 col-xl-3">
        <p>
            Continuando, El Hoyo recibe a sus visitantes con los colores y los aromas de las Frutas Finas: cerezas, fresas, y frutillas se esparcen por las chacras invitando a descubrir los secretos de su cultivo. Además, esta comunidad invita a deleitarse con jornadas de pesca en el Río Epuyen y en el Puerto Patriada; vertiginosos vuelos en parapente; y apacibles cabalgatas que permiten encontrarse con rincones fascinantes. A pocos kilómetros, Villa Lago Puelo se suma con sus propuestas de turismo rural y de aventura, y por supuesto los encantos del Parque Nacional homónimo.
        </p>
        <p>
            Y hay más: El Maitén también tiene lo suyo para ofrecer. Conocido a nivel mundial por ser capital del tren de trocha angosta “Viejo Expreso Patagónico” (conocido popularmente como “La Trochita”) invita a emprender un viaje en el tiempo que cuenta la historia de esta reliquia ferroviaria, y también despliega una completa cartelera para entrar en contacto con el ambiente natural que la rodea.
        </p>
        </div>
        <div class="border border-info rounded col-sm-12 col-md-6 col-xl-3">
        <img src="img/TP1/comarca3.jpg" class="img-fluid img-thumbnail mb-2" alt="La Trochita">
        <p>
            Hacia el sur de la Comarca Andina del Paralelo 42, la localidad de Epuyen propone recrearse con la práctica de Deportes náuticos en su Lago; visitar el antiguo Molino Harinero; y sorprenderse con los testimonios de las culturas indígenas en el Circuito de la Rinconada. Y ya más austral, Cholila aporta un paisaje diferente dónde comienzan a perderse las ondulaciones cordilleranas para regalar una planicie en la que reina una serenidad envidiable. Desde aquí, el Parque Nacional Los Alerces espera a pocos kilómetros para seguir brindando más naturaleza en estado puro.
        </p>
        <p>
            A estos destinos se suman varios parajes que atrapan a los viajeros con su tranquilidad; sus tradiciones; la amabilidad de su gente; y la hermosura de su entorno.
        </p>
        </div>
    </div> <!-- Fin div row -->
    <cite>Fuente: <a href="https://www.argentinaturismo.com.ar/chubut/comarca-andina.php">https://www.argentinaturismo.com.ar/chubut/comarca-andina.php</a></cite>
</div> <!-- Fin div 4 columnas -->

</main> <!-- Fin main cuerpo -->
<script>
$(function(){

  // Contenido de pestañas TP1ej2.php:
  $("#nav-comarca-tab").on('click', function () {
    // console.log("Click hecho en comarca!");
    $("#nav-comarca").load("TP2/tabs/Tab1.txt");
  });
  $("#nav-clima-tab").on('click', function () {
    // console.log("Click hecho en clima!");
    $("#nav-clima").load("TP2/tabs/Tab2.txt");
  });
  $("#nav-ubicacion-tab").on('click', function () {
    // console.log("Click hecho en ubicacion!");
    $("#nav-ubicacion").load("TP2/tabs/Tab3.txt");
  });
  $("#nav-productos-tab").on('click', function () {
    // console.log("Click hecho en productos!");
    $("#nav-productos").load("TP2/tabs/Tab4.txt");
  });

});
</script>
@endsection