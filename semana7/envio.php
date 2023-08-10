<?php
    $destino="at77149964@idat.edu.pe";
    $nombre=$_POST["nombres"];
    $correo=$_POST["correo"];
    $celular=$_POST["celular"];
    $comentarios=$_POST["comentarios"];
    $contenido="Nombres y Apellidos: ".$nombres."\ncorreo: ".$correo."\nCelular: ".$celular."\Comentarios: ".$comentario;
    
    if(mail($destino,"Mensaje",$contenido));
    echo "<script>alert('Gracias por el Mensaje')</script>";
    echo "<script>window.location.href=('./src/spa-caooh.html')</script>"
?>