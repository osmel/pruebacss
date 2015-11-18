<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php 
	  $perfil= $this->session->userdata('id_perfil'); 
?>	

 			<nav id="cabecera" class="navbar navbar-default navbar-fixed-top">

				  <div id="barranegra">  
					            <div id="caja_texto_negro"> 
					                Llevamos 50 anos prestando el mejor servicio desde estrategas. Satisfaciendo las espectativas de los clientes.
					            </div>   
				  </div>  

                  <div id="caja_menu" class="container">

                        <!-- contenedor de movil ENCABEZADO("grafico o titulo") -->                        
                        <div class="navbar-header">
                           <!-- grafico que va a tener el boton -->                                               
                          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                          </button>

                            <!-- grafico o titulo del menu-->                        
                            <!-- <a class="navbar-brand" href="#">Titulo de movil</a> -->
                            <div id="todo_logo_menu"> 
                                    <a href="<?php echo base_url();?>" class="logo_menu">
                                      <img id="logo1" src="http://placehold.it/222x63">
                                    </a>  
                                    <span id="telefono">LLamar - 5537304166 </span>

                            </div>

                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="todo_texto_menu collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                          <ul class="nav navbar-nav">
                                <li class="active1">
                                    <a href="soporte" class="elem_menu">
                                        SOPORTE <!-- <span class="sr-only">(current)</span> -->
                                    </a> 
                                </li>
                                <li>    
                                    <a href="preguntas" class="elem_menu">
                                        PREGUNTAS 
                                    </a>                     
                                 </li>
                                 <li>   
                                    <a href="acerca" class="elem_menu">
                                        ACERCA DE NOSOTROS
                                    </a> 
                                 </li>   
                                 <li>
                                    <a href="contacto" class="elem_menu">
                                        CONTACTANOS 
                                    </a>  
                                 </li>   
                          </ul>
                        </div><!-- /.navbar-collapse -->
                  </div><!-- /.container-fluid -->
                </nav>


	<!-- <div class="navbar navbar-default navbar-custom" role="navigation"> -->
			<!--por defecto el q corre todo 
			
			<nav 
				class=		
					navbar 
					navbar-default 
					navbar-static-top	
					navbar-inverse
					navbar-fixed-top
					navbar-fixed-bottom

				role=
					"navigation"

			
			<nav class="navbar navbar-default navbar-static-top" role="navigation">
			
			Fijo 
				<nav class="navbar navbar-default navbar-fixed-top">
				<nav class="navbar navbar-default navbar-fixed-bottom">
			-->



	



<!-- formulario a la izquierda con un buscador
<form class="navbar-form navbar-left" role="search">
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Search">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
-->
	<!--
		navbar-text
		navbar-right
		navbar-link



<p class="navbar-text navbar-right">
			Signed in as <a href="#" class="navbar-link">Mark Otto</a>
</p>
	 -->