<?php
    $compras = simplexml_load_file('compras.xml');
    $compra = $compras->addChild('compra'); //Creamos un nuevo "objeto" llamado compra
    $compra->addChild('Descripcion', 'Swift Run 22');
    $compra->addChild('Marca', 'Adidas Originals');
    $compra->addChild('Precio', 89.95);
    $compra->addChild('Categoria', 'Hombre');
    $compra->addChild('Talla', $_POST['tallaM5']);
    $compra->addChild('Cantidad', $_POST['cantidadM5']);
    file_put_contents('compras.xml',$compras->asXML()); //Guardamos el objeto en el .xml
    header('location:index.php'); //Regresamos a la página principal
?>