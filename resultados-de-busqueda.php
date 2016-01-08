<!DOCTYPE html>
<html lang="cl">
  <head>
    <title>Cesfar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximun-scale=1">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="tema/js/scripts.js"></script>
  </head>
  <body>
	<?php
		
		$palabra_clave = $_REQUEST['palabra_clave'];
		
		include_once 'config.php';
		
		$conexion=mysqli_connect($host,$username,$password,$db_name) or die("Problemas con la conexión");
		$acentos = $conexion->query("SET NAMES 'utf8'");
		
		$registrosMedicamentos=mysqli_query($conexion,"SELECT * FROM medicamentos WHERE descriptor like '%$palabra_clave%' OR laboratorio = '$palabra_clave' OR principio_activo = '$palabra_clave' ") or die("Problemas en el select:".mysqli_error($conexion));
		
		$tantosResultados = mysqli_num_rows($registrosMedicamentos);
	
	?>
    <div id="bar" class="grupo total"></div>
    <header class="grupo">
      <div class="caja base-100 web-30">
        <div id="logo"><a href="index.html"><img src="img/logo.png"></a></div>
      </div>
      <div class="caja base-100 no-padding web-70">
        <div id="menu-iner"><a id="toggle" href="#" class="circulo"><i class="fa fa-bars"></i></a>
          <div id="overlay"></div>
          <nav id="menu">
            <ul>
              <li><a href="index.html">Quiénes Somos</a></li>
              <li><a href="#">Sucursales</a>
                <ul>
                  <li><a href="#" class="tit">Santiago</a></li>
                  <li><a href="sucursales.html">Cesfar Infante</a></li>
                  <li><a href="cesfar-uc.html">Cesfar UC</a></li>
                  <li><a href="cesfar-providencia.html">Cesfar Providencia</a></li>
                  <li><a href="cesfar-las-condes.html">Las Condes</a></li>
                  <li><a href="cesfar-vitacura.html">Cesfar Vitacura</a></li>
                  <li><a href="cesfar-vina-del-mar.html" class="tit">Viña del Mar</a></li>
                  <li><a href="cesfar-concepcion.html" class="tit">Concepción</a></li>
                </ul>
              </li>
              <li><a href="cotizacion.html">Cotización</a></li>
            </ul>
          </nav>
          <form action="resultados-de-busqueda.html" class="search-container-menu">
            <input id="search-box" type="text" name="q" placeholder="buscar medicamento" class="search-box">
            <label for="search-box"></label><span class="glyphicon glyphicon-search search-icon"></span>
            <input id="search-submit" type="submit" value="buscar">
          </form>
          <div class="clear"></div>
        </div>
      </div>
      <div class="caja base-100 no-padding">
        <form action="resultados-de-busqueda.html" class="search-container">
          <input id="search-box" type="text" name="q" placeholder="buscar medicamento" class="search-box">
          <label for="search-box"><span class="glyphicon glyphicon-search search-icon"></span></label>
          <input id="search-submit" type="submit" value="buscar">
        </form>
      </div>
      <div id="slide"><img src="img/banner-1.jpg" alt=""></div>
    </header>
    <div id="line"></div>
    <section class="grupo">
      <article class="fondo">
        <div class="caja base-100 tablet-50 web-50">
			<?php
				
				
				
				echo "<p class=\"resultado\">Hemos encontrado <span class=\"resultado\">$tantosResultados</span> productos</p>";
				echo "<ul id=\"--all-resultados\">";
					while($reg=mysqli_fetch_array($registrosMedicamentos)){
						$descriptor = $reg['descriptor'];
						$principio_activo = $reg['principio_activo'];
					
						echo "<li>$descriptor (nombre genérico: $principio_activo)</li>";
					}
					
				echo "</ul>";
			?>
        </div>
        <div class="caja base-100 tablet-50 web-50 no-padding">
          <form id="busqueda">
            <input type="text" placeholder="buscar">
            <input type="submit">
          </form>
        </div>
      </article>
    </section>
    <footer class="total">
      <div class="grupo total">
        <div id="f-arriba">
          <div id="mini-logo" class="caja base-35">
            <div class="caja base-50 web-30 hd-50 no-padding"></div>
            <div class="caja base-50 web-70 hd-50 no-padding"><img src="img/mini-logo.png" alt=""></div>
          </div>
          <div id="color-l" class="caja base-65 no-padding">
            <p class="dire-mobil"> AV. José Manuel Infante #927, Providencia.</p>
            <p class="tel-mobil"> <a href="tel:02 22099446">(02) 22099446</a></p>
            <p class="mail-mail"> <a href="mailto:contacto@cesfar.cl" target="_top">contacto@cesfar.cl</a></p>
          </div>
        </div>
        <div id="f-abajo-verde"></div>
        <div id="f-abajo">
          <div id="logo-cesfar-mini">
            <div class="caja base-100">
              <p class="bottom-logo">© Cesfar 2015</p>
            </div>
            <div class="caja base-100">
              <p>Casa Matriz</p>
              <p class="dire-mobil"> AV. José Manuel Infante #927, Providencia.</p>
              <p class="tel-mobil"> <a href="tel:02 22099446">(02) 22099446</a></p>
              <p class="mail-mail"> <a href="mailto:contacto@cesfar.cl" target="_top">contacto@cesfar.cl</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>