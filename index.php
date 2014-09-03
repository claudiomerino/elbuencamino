<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Estudio de diseño de Experiencia de usuarios y estrategia digital en Santiago de Chile" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Estudio de diseño Ux y estrategia digital en Santiago de Chile</title>
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/custom.css" />
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700' rel='stylesheet' type='text/css'>
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </head>
  <body>
    <div id="wrap">
    <header class="masthead">
      <div class="container">
                <?php  

      // check for a successful form post  
      if (isset($_GET['s'])) echo "<br><div class=\"alert alert-success alert-dismissible text-center\" role=\"alert\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>".$_GET['s']."</div>";  

      // check for a form error  
      elseif (isset($_GET['e'])) echo "<br><div class=\"alert alert-danger alert-dismissible text-center\" role=\"alert\">".$_GET['e']."</div>";  

?>
        <figure><img src="img/logo-ebc.png" width="300" alt="Estudio de diseño de interacción El Buen Camino" /></figure>
        <h2>Somos una consultora digital donde te ayudamos a conocer a tus usuarios y a tomar desiciones de diseño basadas en evidencia concreta.</h2>
        <div class="row">
            <button><a href="#section3">Mira nuestro trabajo.</a></button>
            <button><a href="#section4">cuéntanos de tu proyecto.</a></button>
        </div>
      </div>
    </header>
    <nav class="navbar navbar-inverse navbar-static-top" id="nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        </div>
        <div class="collapse navbar-collapse">
          <a href="#section1"><img src="img/logo-horizontal.png" width="150" alt="" /></a>
          <ul class="nav navbar-nav">
            <li><a href="#section2">Servicios</a></li>
            <li><a href="#section3">Clientes</a></li>
            <li><a href="#section4">Contáctanos</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <section id="section1">
      <div id="video_container">
        <video autoplay loop id="bgvid" poster="img/transparent.png">
          <source src="vid/ebc.mp4" type="video/mp4">
          <source src="vid/ebc.webm" type="video/webm">
          <source src="vid/ebc.m4v" type="video/m4v">
            Tu navegador no sopora el tag de video
        </video>
      </div>
    </section> 

    <section id="section2">
      <div class="container">
        <h4>Somos un equipo reducido de profesionales repartido por distintas ciudades del mundo donde hacemos muchas cosas, pero no de todo.</h4>
        <h3>Esto es lo que más nos piden:</h3>
        <div class="row servicios-home">
          <div class="col-md-3 col-sm-6">
            <i class="flaticon-user-research"></i>
            <div class="caption">
              <h4>Investigación con usuarios</h4>
              <p>Usamos técnicas de investigación y auditoría para descubrir y entender los desafíos y particularidades que representa cada proyecto.</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <i class="flaticon-user-tests"></i>
            <div class="caption">
              <h4>Pruebas de Usabilidad</h4>
              <p>Hoy testear tus pantallas ya no es opcional y está probado que mientras antes testees, más barato será corregir lo que haya que corregir.</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <i class="flaticon-ux"></i>
            <div class="caption">
              <h4>Experiencia de Usuario (Ux)</h4>
              <p>Te ayudamos a ordenar tu información, optimizar tu sitio y validar tus pantallas colocando a tu cliente al medio del proceso.</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <i class="flaticon-front"></i>
            <div class="caption">
              <h4>Diseño web</h4>
              <p>Diseñamos y desarrollamos con cariño y oficio interfaces que se adaptan a las distintas pantallas y dispositivos de tus usuarios.</p>
            </div>
          </div>
          <button type="button" data-toggle="collapse" data-target="#servicios-todos"><a>Esto es todo lo que hacemos.</a></button>
        </div> 
        <div id="servicios-todos" class="collapse">
          <ul class="media-list">
            
            <li class="media col-md-6 col-sm-6">
              <a class="pull-left" href="#"><i class="flaticon-IA"></i></a>
              <div class="media-body">
                <h4 class="media-heading">Arquitectura de información</h4>
                Ordenamos, categorizamos y jerarquizamos el contenido de tu sitio o aplicación para ayudar a tus usuarios a encontrar eso que vinieron a buscar de manera fácil y rápida.
              </div>
            </li>
            <li class="media col-md-6 col-sm-6">
              <a class="pull-left" href="#"><i class="flaticon-interview"></i></a>
              <div class="media-body">
                <h4 class="media-heading">Entrevistas con usuarios</h4>
                Conversamos con tus usuarios para preguntarle acerca de sus experiencias con tu sitio y ayudarte a entender las motivaciones, percepciones y esquemas mentales de las personas que utilizan tus servicios.
              </div>
            </li>

            <!--<li class="media col-md-6 col-sm-6">
              <a class="pull-left" href="#"><i class="flaticon-recruting"></i></a>
              <div class="media-body">
                <h4 class="media-heading">Reclutamiento de usuarios</h4>
                Te ayudamos a encontrar a los usuarios precisos que 
              </div>
            </li>-->

            <!--<li class="media col-md-6 col-sm-6">
              <a class="pull-left" href="#"><i class="flaticon-cardsort"></i></a>
              <div class="media-body">
                <h4 class="media-heading">Card Sorting</h4>
                En un lugar de la Mancha, de cuyo nombre no quiero acordarme, no ha mucho tiempo que vivía un hidalgo de los de lanza en astillero, adarga antigua, rocín flaco y galgo corredor.
              </div>
            </li>-->

            <li class="media col-md-6 col-sm-6">
              <a class="pull-left" href="#"><i class="flaticon-html"></i></a>
              <div class="media-body">
                <h4 class="media-heading">Desarrollo Front-end</h4>
                Desarrollamos a mano el HTML, CSS y Javascript de tu sitio web, creando códigos que siguen todas las buenas prácticas de la industria para asegurar la correcta visualización e integración con tu CMS.
              </div>
            </li>

            <li class="media col-md-6 col-sm-6">
              <a class="pull-left" href="#"><i class="flaticon-responsive"></i></a>
              <div class="media-body">
                <h4 class="media-heading">Diseño responsivo</h4>
                Hoy tus usuarios verán tu sitio desde muchos dispositivos con distintas resoluciones. Te ayudamos a que tu sitio se vea bien en todos los dispositivos.
              </div>
            </li>
            <li>&nbsp;</li>

            <!--<li class="media col-md-6 col-sm-6">
              <a class="pull-left" href="#"><i class="flaticon-optimization"></i></a>
              <div class="media-body">
                <h4 class="media-heading">Optimización de landing pages.</h4>
                Esas páginas a la que diriges todos tus esfuerzos de marketing y SEO pueden ser mejoradas y optimizadas pa
              </div>
            </li>-->

            <li class="media col-md-6 col-sm-6">
              <a class="pull-left" href="#"><i class="flaticon-survey"></i></a>
              <div class="media-body">
                <h4 class="media-heading">Encuestas online</h4>
                Diseñamos, corremos y analizamos los resultados de las encuestas online que necesite tu negocio. ¿Quieres saber de manera rápida que piensan tus usuarios sobre tu web? quizás lo que necesites sea justamente esto.
              </div>
            </li>

            <li class="media col-md-6 col-sm-6">
              <a class="pull-left" href="#"><i class="flaticon-benchmark"></i></a>
              <div class="media-body">
                <h4 class="media-heading">Benchmarks de competidores</h4>
                Un diagnóstico completo y una comparativa a detalle con la competencia, que te servirá de brújula para realizar mejoras rápidas o emprender un rediseño estructural. Inspeccionamos 30 sitios locales o internacionales de tu elección, con foco en 5 verticales.
              </div>
            </li>

            <li class="media col-md-6 col-sm-6">
              <a class="pull-left" href="#"><i class="flaticon-strategy"></i></a>
              <div class="media-body">
                <h4 class="media-heading">Auditorías de sitios y Apps.</h4>
                Revisamos tus pantallas a través de los ojos de varios expertos, los que con sus análisis y recomendaciones te ayudarán a nivelar y actualizar tu interfaz a los estándares y tendencias del momento.
              </div>
            </li>

          </ul> 
        </div>
      </div>
    </section>

  <section id="section3">
    <div class="container">
      <h4>Trabajamos con clientes globales y locales que les interesa saber lo que sus clientes piensan y de que manera diseñar para ellos.</h4>
      <h3>Lo último que hemos hecho</h3>
      <div class="clientes col-md-12">
        <ul>
           <li>
            <div class="cliente col-md-4 col-sm-6">
              <img src="img/image-thum5.jpg" alt="">
              <span>
                <h5>Santanderrio.com.ar</h5>
                <p>Rediseño del sitio público del banco Santander Río, en Argentina. Desde la investigación inicial hasta el desarrollo del front-end y la validación con usuarios.</p>
                <button data-toggle="modal" data-target="#santander"><a href="#">ver caso</a></button>
              </span>
            </div>
          </li>
          <li>
            <div class="cliente col-md-4 col-sm-6">
              <img src="img/image-thum1.jpg" />
              <span>
                <h5>Raileurope 4A.</h5>
                <p>Investigación de mercado, pruebas con usuarios y arquitectura de información en distintos países para e-commerce de viajes en trenes.</p>
                <button data-toggle="modal" data-target="#railEurope"><a href="#">ver caso</a></button>
              </span>
            </div>  
          </li>
          <li>
            <div class="cliente col-md-4 col-sm-6">
              <img src="img/image-thum2.jpg" alt="" />
              <span>
                <h5>Plataforma Megaclub</h5>
                <p>Investigación de mercado y arquitectura de información para una plataforma de gamification que incentiva el cumplimiento de metas dentro de los equipos.</p>
                <button data-toggle="modal" data-target="#megaclub"><a href="#">ver caso</a></button>
              </span>
            </div>
          </li>
          <li>
            <div class="cliente col-md-4 col-sm-6">
              <img src="img/image-thum3.jpg" alt="">
              <span>
                <h5>Lexdir.com</h5>
                <p>Pruebas de usabilidad y optimización de la arquitectura de información para startup dedicada a conectar abogados con usuarios con problemas legales.</p>
                <button data-toggle="modal" data-target="#lexdir"><a href="#">ver caso</a></button>
              </span>
            </div>
          </li>
          <li>  
            
            <div class="cliente col-md-4 col-sm-6">
              <img src="img/image-thum6.jpg" alt="">
              <span>
                <h5>Tienda Online Proximo Games</h5>
                <p>Pruebas de usabilidad e informe con sugerencias de mejoras de rápida implementación para optimizar pantallas claves del sitio. </p>
                <!--<button data-toggle="modal" data-target="#venyviaja"><a href="#">ver caso</a></button>-->
              </span>
            </div>
          </li>
          <li>
            <div class="cliente col-md-4 col-sm-6">
              <img src="img/image-thum7.jpg" alt="">
              <span>
                <h5>Clínica Alemana Móvil</h5>
                <p>Arquitectura de Información y diseño de interfaz para pedir horas con médicos desde el móvil.</p>
                <!--<button data-toggle="modal" data-target="#alemana"><a href="#">ver caso</a></button>-->
              </span>
            </div>
          </li>
        </ul>
      </div>
    </div>
      <div class="acuerdos">
        <h3>Sabemos que cada proyecto es único.</h3>
        <h4>Y que conversando se llega a acuerdos.</h4>
        <p>Nos encantaría escuchar tu proyecto y que juntos veamos la mejor manera para colaborar.<br />Déjanos tus datos en el formulario y nos contactaremos contigo lo antes posible.</p>
        <i class="flaticon-thin1"></i>    
      </div>
    </div>
</section>

  <section id="section4">
    <div class="container">
      <h3>Nos gusta conversar</h3>
      <div class="row">
        <div class="formulario col-md-8">
          <p>Llena el formulario a continuación o envíanos un correo a hola@elbuencamino.com</p>

          <form method="POST" action="contact-form-submission.php" role="form">
            <div class="col-md-6">

              <input type="text" name="contact_name" id="input1" placeholder="¿Tu nombre?">
            </div>
            <div class="col-md-6">
              <input type="text" name="contact_email" id="input2" placeholder="Correo electrónico">
            </div>
            <div class="col-md-12">
              <textarea name="contact_message" id="input3" placeholder="¿Qué podemos hacer por ti?"></textarea>
            </div>
            <div class="col-md-12">
              <input type="hidden" name="save" value="contact">  
              <button type="submit" >Dinos cosas.</button>
            </div>
          </form>
        </div>
        <div class="oficinas col-md-4 col-sm-12">
          <h5>También podeis pasar a vernos a:</h5>
        </div>
        <div class="oficinas col-md-4 col-sm-6">
          <p class="textimages">
            <strong>El Buen Camino Santiago de Chile.</strong><br />
            Encomenderos 256 of 12, Las Condes,<br />
            PO 7500518. Santiago de Chile.<br />
            +562 25709273
          </p>
          <img src="img/santiago.jpg" width="300" alt="" />
        </div>
        <div class="oficinas col-md-4 col-sm-6">
          <div class="textimages">
            <strong>El Buen Camino Barcelona.</strong><br />Carrer Taquigraf Martí 24 1º 4to.<br />PO 08028, Barcelona.<br />+34 606984512
          </div>
          <img src="img/barcelona.jpg" width="300" alt="" />
        </div>
        <div class="social col-md-4 col-sm-12">
          <ul>
            <li><a href="http://www.facebook.com/siguiendoelbuencamino"><i class="flaticon-facebook"></i></a></li>
            <li><a href="http://www.behance.net/ElBuenCamino"><i class="flaticon-behance"></i></a></li>
            <!--<li><a href="http://github.com/claudiomerino"><i class="flaticon-github"></i></a></li>-->
            <li><a href="http://www.twitter.com/el_buen_camino"><i class="flaticon-twitter"></i></a></li>
            <li><a href="callto://elbuencamino.com"><i class="flaticon-skype"></i></a></li>
          </ul>
        </div>
      </div>
    </div> 
  </section>
  <footer>
  </footer>


  <!--===================modal Rail Europe-->

      <div class="modal fade" id="railEurope" tabindex="-1" role="dialog" aria-labelledby="RailEurope" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
           <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <img src="img/logo-raileurope.png" alt ="raileurope.com.au " />
              <h4>Investigación y pruebas con usuarios en Australia, Argentina y Brasil.</h4>
            </div>
            <div class="modal-body">
              <h4>Acerca del cliente</h4>
              <p>RailEurope es un e-commerce global líder en viajes y pases de trenes para turistas que desean recorrer Europa sobre rieles. A principios de año, nos pidieron que investigáramos los problemas de usabilidad que sus clientes podrían tener dentro del sitio y que los ayudásemos a solucionarlos.</p>
              <div class="text-center">
                <p>Mira lo que hicimos en la siguiente presentación.</p>
                <iframe src="//www.slideshare.net/slideshow/embed_code/38387594?rel=0" width="750" height="563" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> 
                <!--<object type="application/pdf" data="casos/raileurope.pdf" width="700px">this is not working as expected</object>-->
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary">Ver el caso en PDF</button>
            </div>
          </div>
        </div>
      </div>


        <!--===================modal Megaclub-->
      <div class="modal fade" id="megaclub" tabindex="-1" role="dialog" aria-labelledby="Megaclub" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
           <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <img src="img/logo-megaclub.png" alt ="megaclub.cl " />
              <h4 class="modal-title" id="Megaclub">Investigación con usuarios y rediseño de la arquitectura de información</h4>
            </div>
            <div class="modal-body">
              <h4>Acerca del cliente</h4>
              <p>Megaclub es una empresa chilena que se dedica a mejorar, reconocer e incentivar a los equipos y personas de diversas empresas de chile mediante una plataforma virtual de incentivos y competencia adaptadas a cada empresa.</p>
              <p>Con el tiempo esta plataforma fue quedándose pequeña para las funcionalidades que sus clientes les demandaban y nos contactaron para que les ayudásemos a pensar en una nueva versión de la plataforma, orientada a incentivar a los equipo de trabajo desde las dinámicas del juego, y mediante este enfoque mejorar los indicadores fijados por la empresa anteriormente (Ventas, reconocimientos, menor rotación, etc)</p>
              <p>&nbsp;</p>
              <h4>El proyecto antes de comenzar el rediseño.</h4>
              <img src="img/megaclub-antes.jpg" alt="" /><br />

              <h4>Cuál fue el alcance de este proyecto?</h4>
              <p>El alcance de esta primera etapa del proyecto llega hasta definir una arquitectura de información que soporte las nuevas funcionalidades que se quieren incorporar a la plataforma y poder contar con un prototipo navegable sobre el  cual hacer pruebas de usabilidad.</p>
              <p><img src="img/megaclub-alcance.jpg" alt="" /></p>

              <h4>¿Qué hicimos en este proyecto?</h4>
              <ul>
                <li>Comprendimos las necesidades de información de los distintos tipos de usuarios que utilizan la plataforma.</li>
                <li>Creamos una arquitectura de información pensada desde el usuario y generamos un prototipo navegable del sitio para que sirva de guía para los equipos de diseño y desarrollo.</li>
              </ul>
              <p>Complementamos la investigación con un benchmark de mercado donde analizamos en profundidad 6 plataformas de gamification en el que revisamos las tendencias y buenas prácticas de los competidores de megaclub.</p>

              <p><strong>Auditoría y consultoría</strong><br />
                Teniendo claras las expectativas de los distintos involucrados en el proyecto y Antes de comenzar con la arquitectura definimos 10 grandes lineamientos que guiarían el proceso de diseño y 5 tipos de usuarios con distintas motivaciones y barreras las cuales teníamos que considerar en el proyecto.</p>

              <p><strong>Arquitectura de información</strong><br />
                Una vez definidos los vectores del rediseño, comenzamos con un trabajo de arquitectura de información, en donde definimos un nuevo árbol de contenidos para albergar las nuevas funcionalidades a incorporarse. Armamos una estructura de información flexible con tres secciones de base (comunidad) y que mediante distintos complementos se adapta al objetivo del cliente (Reconocimiento, incentivo, comunicación, etc) </p>
              
              <p><strong>4. Prototipado para testeo</strong>
                <img src="img/megaclub-prototipo.jpg" alt="" /><br />
                <br />Desde un inicio hemos sabido que este es un proyecto complejo donde la clave del éxito está en que logremos enganchar a los usuarios finales en las dinámicas, ya sea mediante estímulos como el catálogo de premios o las chapitas de reconocimiento. Es por eso que antes de comenzar con el diseño y desarrollo preparamos un prototipo navegable de las principales secciones para testear con usuarios y poder corregir lo que haya que corregir.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary">Ver prototipo en otra pestaña</button>
            </div>
          </div>
        </div>
      </div>


        <!--===================modal Lexdir-->
      <div class="modal fade" id="lexdir" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
           <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <img src="img/logo-lexdir.png" width="200" alt ="lexdir.com " />
              <h4 class="modal-title" id="myModalLabel">Pruebas de usabilidad y optimización de la arquitectura de información.</h4>
            </div>
            <div class="modal-body">
              <h4>Acerca del cliente</h4>
              <p>Lexdir es una comunidad de información jurídica que permite la interacción directa entre abogados especializados y usuarios en busca de soluciones jurídicas. El año pasado, luego de un rediseño importante, vieron cómo las conversiones comenzaban a caer y nos contactaron para que les ayudaramos a descubrir que estaba pasando.</p>
              <p>Comenzamos el proyecto haciendo una ronda de 30 tests de usuarios a clientes finales y a abogados que no conocían el sitio para observar si lograban entender de que iba el sitio y cómo utilizarlo.</p>
              <p>De estas pruebas salió mucha información relevante que nos permitiría develar los puntos donde los usuarios estaban teniendo problemas. Clasificamos la información en 3 grupos dependiendo del grado de esfuerzo que requeriría corregir el problema y le asignamos un grado de relevancia de acuerdo a lo que observamos en las pruebas de usuarios.</p>
              <p>Para abordar las mejoras en el sitio optamos por una metodología basada en iteraciones cortas (sprints), en donde dividimos los entregables por secciones y trabajamos solo en esa sección hasta subirla a producción.</p>
              <p><img src="img/lexdir-metodologia.jpg" alt="" /></p>

              <div class="text-center">
                <h4>Mira cómo abordamos uno de los sprints en la siguiente presentación.</h4>
                <iframe src="//www.slideshare.net/slideshow/embed_code/38100124?rel=0" width="700" height="600" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" allowfullscreen> </iframe> 
              </div>
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary">Visita el sitio</button>
            </div>
          </div>
        </div>
      </div>

        <!--===================modal alemana-->
      <div class="modal fade" id="alemana" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
           <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel">Análisis de usabilidad y diseño de la versión móvil del sitio.</h4>
            </div>
            <div class="modal-body">
              <h4>Acerca del cliente</h4>
              <p>La Clínica Alemana de Santiago, uno de los hospitales más prestigiosos de Chile quería rediseñar su sistema de petición de horas médicas </p>
              <h4>Proceso.</h4>
              <p><strong>1. Levantamiento de información y planificación</strong><br />Primero viajamos a Paris para levantar toda la información que podíamos juntar sobre el negocio. Entrevistamos a distintos tomadores de decisión de la empresa y a los distintos integrantes del equipo del proyecto para empaparnos de su visión y conocimiento en el negocio.<br />
      Una vez que tuvimos claros los objetivos del cliente armamos una planificación de actividades en terreno para conocer de primera fuente cómo es que sus clientes y público objetivo percibían el sitio, cómo fueron sus experiencias la primera vez que compraron un pasaje de tren en el caso de los clientes, y conocer las expectativas y evaluar el entendimiento de los productos en el caso de los no clientes.</p>
              <p><strong>2. Investigación con usuarios</strong><br />Luego de 8 focus groups, 50 tests de usuarios y 20 entrevistas en profundidad repartidos en 3 países distintos tuvimos una mapa general sobre los principales problemas que se estaban teniendo dentro del sitio los usuarios de los distintos países.</p>
              <p><strong>3. Investigación complementaria</strong><br />Junto con las actividades con usuarios,  realizamos un benchmark detallado de los sitios y apps de la competencia para tener una visión general del estado de los sitios y comparar los distintos elementos estratégicos de cada competidor con RailEurope.</p>
              <p><strong>4. Presentación de resultados</strong><br />Esta información la transcribimos, ordenamos, tabulamos y jerarquizamos de acuerdo a que tan importantes eran para la concreción de las tareas, qué tan fácil o difícil resultaría solucionarlo y propusimos una nueva propuesta de home y página de productos de acuerdo a toda la información que recopilamos.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>

        <!--===================modal Santander-->
      <div class="modal fade" id="santander" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
           <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <img src="img/logo-santander.png" width="250" alt ="santanderrio.com.ar " />
              <h4>Arquitectura de información sitio público del banco Santander Río.</h4>
            </div>
            <div class="modal-body">
              <h4>Acerca del cliente</h4>
              <p>Santander Rio es uno de los bancos más grandes e importantes de la Argentina. Tienen más de 2.500.000 de clientes activos y más de 300 sucursales repartidas por todo el territorio.<br />A finales del 2011, la agencia de publicidad Mundo Buenos Aires nos contactó para que los ayudáramos a pensar y desarrollar el proyecto de rediseño del banco.</p>
              <p>Durante más de un año trabajamos codo a codo con el equipo de la agencia, con el equipo del cliente y junto a otras empresas especializadas para diseñar desde las bases un nuevo sitio que le permitiese al banco utilizar la web para conseguir más clientes. Con ese objetivo en mente fuimos dándole forma a un ambicioso proyecto de rediseño lleno de desafíos técnicos y tecnológicos que les presentamos en el siguiente caso..</p>
           <div class="text-center">
                <p>Esto fue lo que hicimos en este proyecto.</p>
                <iframe src="//www.slideshare.net/slideshow/embed_code/38388421?rel=0" width="750" height="563" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe>
                <!--<object type="application/pdf" data="casos/raileurope.pdf" width="700px">this is not working as expected</object>-->
              </div>
            </div>
          </div>
        </div>
      </div>




        <!--===================modal Ven y viaja-->
      <div class="modal fade" id="venyviaja" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
           <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel">Investigación y pruebas de usabilidad con clientes en diversos mercados.</h4>
            </div>
            <div class="modal-body">
              <h4>Acerca del cliente</h4>
              <p>RailEurope es un e-commerce global líder en viajes y pases de trenes para turistas que desean recorrer Europa sobre rieles. A principios de año, nos pidieron que investigáramos los problemas de usabilidad que sus clientes podrían tener dentro del sitio y que los ayudásemos a solucionarlos.</p>
              <h4>Proceso.</h4>
              <p><strong>1. Levantamiento de información y planificación</strong><br />Primero viajamos a Paris para levantar toda la información que podíamos juntar sobre el negocio. Entrevistamos a distintos tomadores de decisión de la empresa y a los distintos integrantes del equipo del proyecto para empaparnos de su visión y conocimiento en el negocio.<br />
      Una vez que tuvimos claros los objetivos del cliente armamos una planificación de actividades en terreno para conocer de primera fuente cómo es que sus clientes y público objetivo percibían el sitio, cómo fueron sus experiencias la primera vez que compraron un pasaje de tren en el caso de los clientes, y conocer las expectativas y evaluar el entendimiento de los productos en el caso de los no clientes.</p>
              <p><strong>2. Investigación con usuarios</strong><br />Luego de 8 focus groups, 50 tests de usuarios y 20 entrevistas en profundidad repartidos en 3 países distintos tuvimos una mapa general sobre los principales problemas que se estaban teniendo dentro del sitio los usuarios de los distintos países.</p>
              <p><strong>3. Investigación complementaria</strong><br />Junto con las actividades con usuarios,  realizamos un benchmark detallado de los sitios y apps de la competencia para tener una visión general del estado de los sitios y comparar los distintos elementos estratégicos de cada competidor con RailEurope.</p>
              <p><strong>4. Presentación de resultados</strong><br />Esta información la transcribimos, ordenamos, tabulamos y jerarquizamos de acuerdo a que tan importantes eran para la concreción de las tareas, qué tan fácil o difícil resultaría solucionarlo y propusimos una nueva propuesta de home y página de productos de acuerdo a toda la información que recopilamos.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
      </div>
  <footer>
    <div>Icons made by Daniel Bruce, Freepik, SimpleIcon from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a></div>
  </footer>
  <script type="text/javascript">
    /* affix the navbar after scroll below header */
$('#nav').affix({
      offset: {
        top: $('header').height()-$('#nav').height()
      }
}); 

/* highlight the top nav as scrolling occurs */
$('body').scrollspy({ target: '#nav' })


/* smooth scrolling for nav sections */
$('#nav .navbar-nav li>a').click(function(){
  var link = $(this).attr('href');
  var posi = $(link).offset().top;
  $('body,html').animate({scrollTop:posi},700);
});

  </script>
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-44982249-1', 'elbuencamino.com');
  ga('send', 'pageview');

</script>
  </body>
</html>
