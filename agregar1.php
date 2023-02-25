<?php
    $compras = simplexml_load_file('compras.xml');
    $compra = $compras->addChild('compra'); //Creamos un nuevo "objeto" llamado compra
    $compra->addChild('Descripcion', 'SINGLE SHOE - Old Skool Core Classics');
    $compra->addChild('Marca', 'Vans');
    $compra->addChild('Precio', 29.87);
    $compra->addChild('Categoria', 'Mujer');
    $compra->addChild('Talla', $_POST['tallaF1']);
    $compra->addChild('Cantidad', $_POST['cantidadF1']);
    file_put_contents('compras.xml',$compras->asXML()); //Guardamos el objeto en el .xml
    header('location:index.php'); //Regresamos a la página principal
?>