<?php
    $compras = simplexml_load_file('compras.xml');
    $compra = $compras->addChild('compra'); //Creamos un nuevo "objeto" llamado compra
    $compra->addChild('Descripcion', 'Alexie');
    $compra->addChild('Marca', 'Tommy Hilfiger');
    $compra->addChild('Precio', 110);
    $compra->addChild('Categoria', 'Mujer');
    $compra->addChild('Talla', $_POST['tallaF8']);
    $compra->addChild('Cantidad', $_POST['cantidadF8']);
    file_put_contents('compras.xml',$compras->asXML()); //Guardamos el objeto en el .xml
    header('location:index.php'); //Regresamos a la página principal
?>