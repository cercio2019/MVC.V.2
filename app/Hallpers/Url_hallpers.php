<?php 
// para de redireccionar la pagina

 function Redireccionar($pagina)
{
	header('location: '.RUTA_URL.$pagina);
}


 ?>