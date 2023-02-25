<?php
    $compras = simplexml_load_file('compras.xml');
    $compra = $compras->addChild('compra'); //Creamos un nuevo "objeto" llamado compra
    $compra->addChild('Descripcion', 'Adizero Boston 11');
    $compra->addChild('Marca', 'Adidas Running');
    $compra->addChild('Precio', 150);
    $compra->addChild('Categoria', 'Hombre');
    $compra->addChild('Talla', $_POST['tallaM7']);
    $compra->addChild('Cantidad', $_POST['cantidadM7']);
    file_put_contents('compras.xml',$compras->asXML()); //Guardamos el objeto en el .xml
    header('location:index.php'); //Regresamos a la página principal
?>