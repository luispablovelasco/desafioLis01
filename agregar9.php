<?php
    $compras = simplexml_load_file('compras.xml');
    $compra = $compras->addChild('compra'); //Creamos un nuevo "objeto" llamado compra
    $compra->addChild('Descripcion', 'Pola');
    $compra->addChild('Marca', 'Calvin Klein');
    $compra->addChild('Precio', 79.79);
    $compra->addChild('Categoria', 'Mujer');
    $compra->addChild('Talla', $_POST['tallaF9']);
    $compra->addChild('Cantidad', $_POST['cantidadF9']);
    file_put_contents('compras.xml',$compras->asXML()); //Guardamos el objeto en el .xml
    header('location:index.php'); //Regresamos a la página principal
?>