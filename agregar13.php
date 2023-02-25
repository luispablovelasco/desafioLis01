<?php
    $compras = simplexml_load_file('compras.xml');
    $compra = $compras->addChild('compra'); //Creamos un nuevo "objeto" llamado compra
    $compra->addChild('Descripcion', 'Charged Pursuit 3');
    $compra->addChild('Marca', 'Under Armour');
    $compra->addChild('Precio', 69.98);
    $compra->addChild('Categoria', 'Hombre');
    $compra->addChild('Talla', $_POST['tallaM3']);
    $compra->addChild('Cantidad', $_POST['cantidadM3']);
    file_put_contents('compras.xml',$compras->asXML()); //Guardamos el objeto en el .xml
    header('location:index.php'); //Regresamos a la página principal
?>