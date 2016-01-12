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
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="js/typeahead.min.js"></script>
	<script src="js/tipeo.js"></script>  
	
	<style type="text/css">
	.bs-example{
		font-family: sans-serif;
		position: relative;
		margin: 50px;
	}
	.typeahead, .tt-query, .tt-hint {
		border: 2px solid #CCCCCC;
		border-radius: 0px;
		font-size: 24px;
		height: 32px;
		line-height: 30px;
		outline: medium none;
		padding: 8px 12px;
		width: 296px;
	}
	.typeahead {
		background-color: #FFFFFF;
	}
	.typeahead:focus {
		border: 2px solid #0097CF;
	}
	.tt-query {
		box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
	}
	.tt-hint {
		color: #999999;
	}
	.tt-dropdown-menu {
		background-color: #FFFFFF;
		border: 1px solid rgba(0, 0, 0, 0.2);
		border-radius: 8px;
		box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
		margin-top: 12px;
		padding: 8px 0;
		width: 370px;
		/*width: 222px;*/
	}
	.tt-suggestion {
		font-size: 12px;
		line-height: 16px;
		padding: 3px 20px;
	}
	.tt-suggestion.tt-is-under-cursor {
		background-color: #00abb2;
		color: #FFFFFF;
	}
	.tt-suggestion p {
		margin: 0;
		text-align: left !important;
	}
	</style>
	
	
  </head>
  <body>
    <div id="bar" class="grupo total"></div>
    <header class="grupo">
      <div class="caja base-100 web-30">
        <div id="logo"><a href="index.php"><img src="img/logo.png"></a></div>
      </div>
      <div class="caja base-100 no-padding web-70">
        <div id="menu-iner"><a id="toggle" href="#" class="circulo"><i class="fa fa-bars"></i></a>
          <div id="overlay"></div>
          <nav id="menu">
            <ul>
              <li><a href="index.php">Quiénes Somos</a></li>
              <li><a href="#">Sucursales</a>
                <ul>
                  <li><a class="tit">Santiago</a></li>
                  <li><a href="sucursales.php">Cesfar Infante</a></li>
                  <li><a href="cesfar-uc.php">Cesfar UC</a></li>
                  <li><a href="cesfar-providencia.php">Cesfar Providencia</a></li>
                  <li><a href="cesfar-las-condes.php">Las Condes</a></li>
                  <li><a href="cesfar-vitacura.php">Cesfar Vitacura</a></li>
                  <li><a href="cesfar-vina-del-mar.php" class="tit">Viña del Mar</a></li>
                  <li><a href="cesfar-concepcion.php" class="tit">Concepción</a></li>
                </ul>
              </li>
              <li><a href="cotizacion.php">Cotización</a></li>
            </ul>
          </nav>
		  
          <form action="" method="post" class="search-container-menu">
			<input id="search-box" type="text" size="40" name="typeahead" value="<?php echo isset($_POST['typeahead']) ? $_POST['typeahead'] : '' ?>" class="search-box typeahead tt-query" placeholder="buscar medicamento" >
			<!--
			<input id="search-box" type="text" name="palabra_clave" placeholder="buscar medicamento" class="search-box">
            -->
			<label for="search-box"></label><span class="glyphicon glyphicon-search search-icon"></span>
            <input id="search-submit" type="submit" value="buscar" formaction="resultados-de-busqueda.php">
          </form>
		  
          <div class="clear"></div>
        </div>
      </div>
      <div class="caja base-100 no-padding">
	  
        <form action="" method="post" class="search-container">
			<input id="search-box" type="text" size="40" name="typeahead" value="<?php echo isset($_POST['typeahead']) ? $_POST['typeahead'] : '' ?>" class="search-box typeahead tt-query" placeholder="buscar medicamento" >
			<!--
          <input id="search-box" type="text" name="q" placeholder="buscar medicamento" class="search-box">
			-->
          <label for="search-box"><span class="glyphicon glyphicon-search search-icon"></span></label>
          <input id="search-submit" type="submit" value="buscar" formaction="resultados-de-busqueda.php">
        </form>
		
      </div>
      <div class="caja base-100 tablet-100 no-padding">
        <div id="slide"><img src="img/pastillas.jpg" alt=""></div>
      </div>
    </header>
    <div id="line"></div>
    <section class="grupo">
      <article class="fondo">
        <div class="caja base-100 tablet-50 web-50">
          <h1>Quiénes somos</h1>
          <p>
            CESFAR es una empresa desde 1993 dedicada a la comercialización y distribución de medicamentos de especialidad, asegurando su disponibilidad, a precios competitivos.
            Entre las distintas especialidades contamos con medicamentos Oncológicos, Inmunológicos, Reumatológicos, Esclerosis múltiple, VIH, Tratamientos de fertilidad, Vacunas, Suplementos alimenticios, etc.
          </p>
          <h2>MISIÓN</h2>
          <p>
            Cuidar la salud de pacientes con patologías complejas, 
            asegurando a disponibilidad de sus tratamientos a precios 
            competitivos con la debida y personalizada asesoría de nuestro
            equipo de profesionales.
          </p>
          <h2>VISIÓN</h2>
          <p>Ser la principal red de nacional de acceso a medicamentos de especialidad tanto a particulares como a instituciones de salud, perfeccionando diversos procesos logísticos y con ello garantizar la disponibilidad  oportuna de medicamentos y reducir al mínimo el tiempo necesario para llegar nuestros pacientes.<br/><br/></p>
        </div>
        <div class="caja base-100 tablet-50 web-50 no-padding">
          <div id="imagen--left--big"><img src="img/foto-tipo.jpg" alt=""></div>
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