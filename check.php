<?php
    $valor=$_POST['valor'];
    if($valor=="abacate"){
	echo"<center>";
	echo "<h1>Aeeee, você conseguiu, meus parabéns!</h1>";
	echo"</center>";
	
    }else{
	echo"<center>";
	echo "<h1>Shii, deu mole meu parceiro!</h1>";
	echo"<h4><a href='index.html'>Tentar Novamente</a></h4>";
	echo"</center>";
    }

?>