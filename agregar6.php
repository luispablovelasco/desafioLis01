<?php
    $compras = simplexml_load_file('compras.xml');
    $compra = $compras->addChild('compra'); //Creamos un nuevo "objeto" llamado compra
    $compra->addChild('Descripcion', 'Perform Flat Sandal');
    $compra->addChild('Marca', 'Steve Madden');
    $compra->addChild('Precio', 65.55);
    $compra->addChild('Categoria', 'Mujer');
    $compra->addChild('Talla', $_POST['tallaF6']);
    $compra->addChild('Cantidad', $_POST['cantidadF6']);
    file_put_contents('compras.xml',$compras->asXML()); //Guardamos el objeto en el .xml
    header('location:index.php'); //Regresamos a la página principal
?>