  <?php 
if(isset($_POST["submit"]) && $_POST["submit"] <>""){
	$para="seba.siohx@gmail.com";
    $nombre = $_POST["nombre"];
    $de = $_POST["email"];
	$asunto= 'Consulta contacto portafolio';
	$mensaje= 'Teléfono: '.$_POST["fono"]."<br/>".'Nombre: '.$nombre."<br/>".$_POST["mensaje"];
    
    $headers = "MINE-Version:1.0;\r\n";
    $headers .= "Content-type:text/html; \r\n charset=utf-8; \r\n";
    $headers .= "From: $de \r\n";
    $headers .= "Subject:$asunto \r\n";
        
	if(mail($para,$asunto,$mensaje,$headers)){
		$correo_enviado = "El correo fue enviado exitosamente ;)";
    } else{
        $correo_no_enviado = "Ups, algo anda mal con tu correo :(";
    }
	
}
?>
    <footer>
    <div id="main-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-7">
                   <h3>Contáctame</h3>
                    <form id="form1" name="form1" method="post" class="form-contacto">
                        <p>Nombre</p>
                        <input type="text" name="nombre">
                        <p>Email</p>
                        <input type="email" name="email">
                        <p>Teléfono</p>
                        <input type="tel" name="fono">
                        <p>Mensaje</p>
                        <textarea name="mensaje" id="" cols="30" rows="2"></textarea>
                        <input type="submit" value="Enviar" name="submit" class="submit">
                    </form>
                </div>
                <div class="col-sm-4 col-md-offset-1">
                    <ul>
                        <li><a href="https://cl.linkedin.com//in/sebastianolateh" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i><span>/in/sebastianolateh</span></a></li>
                        <li><a href=""><i class="fa fa-whatsapp" aria-hidden="true"></i><span>+569 92116903</span></a></li>
                       <li><a href="mailto:seba.olate.h@gmail.com?Subject=Consulta%20desde%20el%20portafolio" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i><span>seba.olate.h@gmail.com</span></a></li>
                    </ul>
                </div>
            </div>
        </div>            
    </div>
</footer>

</div><!--/#wrap-->  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/lightbox-plus-jquery.min.js"></script> 
    <!-- bxSlider Javascript file -->
    <script src="js/jquery.bxslider.min.js"></script>
    <script src="js/jquery.circliful.min.js"></script> 
    <script src="js/sweetalert.min.js"></script>
    <script src="js/main.js"></script>
<?php if($correo_enviado){?>
    <script>
    $(document).ready(function(){
        swal("¡Listo!", "correo enviado exitosamente", "success");
    });
    </script>
<?php } elseif($correo_no_enviado && $correo_enviado == false){?>
    <script>
    $(document).ready(function(){
        swal("Oops...", "Algo salio mal :(", "error");
    });
    </script>
<?php }?>  
</body>
</html>