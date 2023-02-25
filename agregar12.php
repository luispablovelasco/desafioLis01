<?php
    $compras = simplexml_load_file('compras.xml');
    $compra = $compras->addChild('compra'); //Creamos un nuevo "objeto" llamado compra
    $compra->addChild('Descripcion', 'Panly');
    $compra->addChild('Marca', 'Tommy Hilfiger');
    $compra->addChild('Precio', 75.99);
    $compra->addChild('Categoria', 'Hombre');
    $compra->addChild('Talla', $_POST['tallaM2']);
    $compra->addChild('Cantidad', $_POST['cantidadM2']);
    file_put_contents('compras.xml',$compras->asXML()); //Guardamos el objeto en el .xml
    header('location:index.php'); //Regresamos a la página principal
?>