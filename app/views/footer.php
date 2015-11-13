<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

    
    <div id="pie" >
        <div id="contenido_pie">
            <div id="centro_contenido_pie">
                    
                    <div id="col1_centro_contenido_pie">
                        <div id="elm1"> </div>
                           columna1 <br/>
                           columna1 <br/>
                           columna1 <br/>
                           columna1 <br/>
                           columna1 <br/>
                           columna1 <br/>

                    </div>
                    
                    <div id="col2_centro_contenido_pie" style="border:1px solid red;" >
                       
                        <div id="medio_arriba">
                            <div class="medio_texto_arriba"> 
                                <a href="#">
                                    columna1_izq
                                </a>
                            </div>


                        </div>

                        <div id="medio_abajo" >
                                <div id="col1_medio" style="border-right:1px solid blue;" >
                                        <div class="medio_texto"> 
                                            <a href="#">
                                                columna1_izq
                                            </a>
                                        </div>
                                        <div class="medio_texto"> 
                                            <a href="#">
                                                columna2_izq
                                            </a>
                                        </div>
                                        <div class="medio_texto"> 
                                            <a href="#">
                                                columna3_izq
                                            </a>
                                        </div>
                                </div>

                                <div id="col2_medio">
                                        <div class="medio_texto"> 
                                            <a href="#">
                                                columna1_derecha
                                            </a>
                                        </div>
                                        <div class="medio_texto"> 
                                            <a href="#">
                                                columna1_derecha
                                            </a>
                                        </div>
                                        <div class="medio_texto"> 
                                            <a href="#">
                                                columna1_derecha
                                            </a>
                                        </div>
                                </div>
                        </div>                            

                    </div>

                    <div id="col3_centro_contenido_pie">
                            columna3 <br/>
                            columna3 <br/>
                            columna3 <br/>
                            columna3 <br/>
                            columna3 <br/>
                            columna3 <br/>
                            columna3 <br/>
                            columna3 <br/>
                            columna3 <br/>
                    </div>
            </div>
        </div>
        <div id="raya_pie" > </div>
        <div id="ultimo_pie"> </div>
    </div>

    <!-- Jquery -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.form.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/spin.min.js"></script>



    <?php  echo link_tag('css/normalize.css');  ?>
    <?php // echo link_tag('css/screen.css');  ?>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
     

    <!-- componente fecha simple -->
    <?php echo link_tag('css/bootstrap-datepicker.css'); ?>
    
    <!-- componente rango fecha -->
    <?php echo link_tag('css/daterangepicker-bs3.css'); ?>


	
    <!-- nuestro js principal -->
    <script type="text/javascript" src="<?php echo base_url(); ?>js/mio.js"></script>

	<!--CARRUSEL -->
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.bxslider.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.bxslider.min.js"></script>
	<?php  echo link_tag('css/jquery.bxslider.css');  ?>

	

<!-- componente fecha simple -->
    <script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap-datepicker.js"></script>

    <!-- componente rango fecha -->
    <script type="text/javascript" src="<?php echo base_url(); ?>js/moment.js"></script>        
    <script type="text/javascript" src="<?php echo base_url(); ?>js/daterangepicker.js"></script>       
    

    <!--para conversion a base64.encode y base64.decode -->
    <script src="<?php echo base_url(); ?>js/base64/jquery.base64.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>js/base64/jquery.base64.min.js" type="text/javascript"></script>
    

    <!--datatables para el caso de salidas -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>js/media/css/jquery.dataTables.css">
    <script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>js/media/js/jquery.dataTables.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>js/extensions/TableTools/css/dataTables.tableTools.css">
    <script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>js/extensions/TableTools/js/dataTables.tableTools.js"></script>


    <!-- Mi estilo -->
    <?php  echo link_tag('css/estilo.css'); ?>
    



</body>
</html>




    
    
    
