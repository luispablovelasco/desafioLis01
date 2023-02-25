<?php
    $compras = simplexml_load_file('compras.xml');
    $compra = $compras->addChild('compra'); //Creamos un nuevo "objeto" llamado compra
    $compra->addChild('Descripcion', 'Electron 2.0');
    $compra->addChild('Marca', 'Puma');
    $compra->addChild('Precio', 65.55);
    $compra->addChild('Categoria', 'Hombre');
    $compra->addChild('Talla', $_POST['tallaM6']);
    $compra->addChild('Cantidad', $_POST['cantidadM6']);
    file_put_contents('compras.xml',$compras->asXML()); //Guardamos el objeto en el .xml
    header('location:index.php'); //Regresamos a la página principal
?>