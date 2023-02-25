<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>E-Commerce</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-dark bg-dark">
        <div div class="container-fluid">
        <a class="navbar-brand" href="#">
        <h1>Pepe Shoes</h1>
        </a>
        </div>
        </nav>
    </header>
    
    <br>
    <br>
    <center><h1>Adilson Arian, Montes Martines - MM200149</h1></center>
    <center><h1>Luis Pablo, Velasco Flores - VF202313</h1></center>
    <br>
    <center><h2>Desafío practico 01 LIS</h2></center>
    <br>
    <br>

    <div class="container-fluid">
        <div class="container-xl border border-2 gx-4">
            <br>
            <div class="row">
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="img/mujer/SINGLE_SHOE.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <hr>
                          <h5 class="card-title">SINGLE SHOES - Old Skool Classics</h5>
                          <p class="card-text">Vans (Mujer)</p>
                          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal1">
                            Agregar a la compra
                          </button>
                          <div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Información de la compra</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    <form method="POST" action="agregar1.php">
                                    <label for="Zapato" class="col-form-label" name="nombreZapato">SINGLE SHOES - Old Skool Classics</label>
                                    <label for="Tallas" class="col-form-label">Tallas:</label>
                                    <select class="form-select" aria-label="Default select example" name="tallaF1" id="tallaF1">
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                    </select>
                                    <label for="precioZapato" class="col-form-label">Precio por unidad:</label>
                                    <br>
                                    <button type="button" class="btn btn-danger" disabled>$29.97</button>
                                    <br>
                                    <label for="cantidad" class="col-form-label">Cantidad</label>
                                    <input type="number" class="form-control" id="cantUno" min="1" name="cantidadF1">
                                    <br>
                                    <button type="submit" name="add" href="agregar1.php" class="btn btn-primary">Guardar cambios</button>
                                    <br>
                            </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                                                  
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="img/mujer/Fresh_Foam_680v7.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <hr>
                          <h5 class="card-title">Fresh Foam 680v7</h5>
                          <br>
                          <p class="card-text">New Balance (Mujer)</p>
                          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal2">
                            Agregar a la compra
                          </button>
                          <div class="modal fade" id="modal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Información de la compra</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    <form method="POST" action="agregar2.php">
                                    <label for="Zapato" class="col-form-label" name="nombreZapato">Fresh Foam 680v7</label>
                                    <label for="Tallas" class="col-form-label">Tallas:</label>
                                    <select class="form-select" aria-label="Default select example" name="tallaF2" id="tallaF2">
                                        <option>5</option>
                                        <option>5.55</option>
                                        <option>6</option>
                                        <option>6.5</option>
                                    </select>
                                    <label for="precioZapato" class="col-form-label">Precio por unidad:</label>
                                    <br>
                                    <button type="button" class="btn btn-danger" disabled>$79.99</button>
                                    <br>
                                    <label for="cantidad" class="col-form-label">Cantidad</label>
                                    <input type="number" class="form-control"  min="1" name="cantidadF2">
                                    <br>
                                    <button type="submit" name="add" href="agregar2.php" class="btn btn-primary">Guardar cambios</button>
                                    <br>
                            </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="img/mujer/Laddi_2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <hr>
                          <h5 class="card-title">Laddi 2</h5>
                          <br>
                          <p class="card-text">Tommy Hilfinger (Mujer)</p>
                          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal3">
                            Agregar a la compra
                          </button>
                          <div class="modal fade" id="modal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Información de la compra</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    <form method="POST" action="agregar3.php">
                                    <label for="Zapato" class="col-form-label" name="nombreZapato">Laddi 2</label>
                                    <label for="Tallas" class="col-form-label">Tallas:</label>
                                    <select class="form-select" aria-label="Default select example" name="tallaF3">
                                        <option>8</option>
                                        <option>8.5</option>
                                        <option>9</option>
                                        <option>10</option>
                                    </select>
                                    <label for="precioZapato" class="col-form-label">Precio por unidad:</label>
                                    <br>
                                    <button type="button" class="btn btn-danger" disabled>$59.99</button>
                                    <br>
                                    <label for="cantidad" class="col-form-label">Cantidad</label>
                                    <input type="number" class="form-control"  min="1" name="cantidadF3">
                                    <br>
                                    <button type="submit" name="add" href="agregar3.php" class="btn btn-primary">Guardar cambios</button>
                                    <br>
                            </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="img/mujer/Maggie.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <hr>
                          <h5 class="card-title">Maggie</h5>
                          <br>
                          <p class="card-text">Calvin Klein (Mujer)</p>
                          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal4">
                            Agregar a la compra
                          </button>
                          <div class="modal fade" id="modal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Información de la compra</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    <form method="POST" action="agregar4.php">
                                    <label for="Zapato" class="col-form-label" name="nombreZapato">Maggie</label>
                                    <label for="Tallas" class="col-form-label">Tallas:</label>
                                    <select class="form-select" aria-label="Default select example" name="tallaF4" id="tallaF2">
                                        <option>6.5</option>
                                        <option>7</option>
                                        <option>7.5</option>
                                        <option>8</option>
                                    </select>
                                    <label for="precioZapato" class="col-form-label">Precio por unidad:</label>
                                    <br>
                                    <button type="button" class="btn btn-danger" disabled>$63.45</button>
                                    <br>
                                    <label for="cantidad" class="col-form-label">Cantidad</label>
                                    <input type="number" class="form-control"  min="1" name="cantidadF4">
                                    <br>
                                    <button type="submit" name="add" href="agregar4.php" class="btn btn-primary">Guardar cambios</button>
                                    <br>
                            </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            <br>
        
            <div class="row">
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="img/mujer/Karmona.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <hr>
                          <h5 class="card-title">Karmona</h5>
                          <p class="card-text">Calvin Klein (Mujer)</p>
                          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal5">
                            Agregar a la compra
                          </button>
                          <div class="modal fade" id="modal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Información de la compra</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    <form method="POST" action="agregar5.php">
                                    <label for="Zapato" class="col-form-label" name="nombreZapato">Karmona</label>
                                    <label for="Tallas" class="col-form-label">Tallas:</label>
                                    <select class="form-select" aria-label="Default select example" name="tallaF4" id="tallaF5">
                                        <option>6</option>
                                        <option>7</option>
                                        <option>7.5</option>
                                        <option>8</option>
                                        <option>8.5</option>
                                    </select>
                                    <label for="precioZapato" class="col-form-label">Precio por unidad:</label>
                                    <br>
                                    <button type="button" class="btn btn-danger" disabled>$63.45</button>
                                    <br>
                                    <label for="cantidad" class="col-form-label">Cantidad</label>
                                    <input type="number" class="form-control"  min="1" name="cantidadF5">
                                    <br>
                                    <button type="submit" name="add" href="agregar5.php" class="btn btn-primary">Guardar cambios</button>
                                    <br>
                            </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="img/mujer/Perform_Flat_Sandal.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <hr>
                          <h5 class="card-title">Perform Flat Sandal</h5>
                          <p class="card-text">Steve Maidden (Mujer)</p>
                          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal6">
                            Agregar a la compra
                          </button>
                          <div class="modal fade" id="modal6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Información de la compra</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    <form method="POST" action="agregar4.php">
                                    <label for="Zapato" class="col-form-label" name="nombreZapato">Perform Flat Sandal</label>
                                    <label for="Tallas" class="col-form-label">Tallas:</label>
                                    <select class="form-select" aria-label="Default select example" name="tallaF6" id="tallaF2">
                                        <option>6</option>
                                        <option>7.5</option>
                                        <option>9</option>
                                        <option>10</option>
                                    </select>
                                    <label for="precioZapato" class="col-form-label">Precio por unidad:</label>
                                    <br>
                                    <button type="button" class="btn btn-danger" disabled>$65.55</button>
                                    <br>
                                    <label for="cantidad" class="col-form-label">Cantidad</label>
                                    <input type="number" class="form-control"  min="1" name="cantidadF6">
                                    <br>
                                    <button type="submit" name="add" href="agregar6.php" class="btn btn-primary">Guardar cambios</button>
                                    <br>
                            </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="img/mujer/2402_Rope.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <hr>
                          <h5 class="card-title">2402 - Rope</h5>
                          <p class="card-text">Superga (Mujer)</p>
                          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal7">
                            Agregar a la compra
                          </button>
                          <div class="modal fade" id="modal7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Información de la compra</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    <form method="POST" action="agregar7.php">
                                    <label for="Zapato" class="col-form-label" name="nombreZapato">2402 Rope</label>
                                    <label for="Tallas" class="col-form-label">Tallas:</label>
                                    <select class="form-select" aria-label="Default select example" name="tallaF7" id="tallaF2">
                                        <option>6</option>
                                        <option>6.5</option>
                                        <option>7</option>
                                        <option>10</option>
                                    </select>
                                    <label for="precioZapato" class="col-form-label">Precio por unidad:</label>
                                    <br>
                                    <button type="button" class="btn btn-danger" disabled>$65.80</button>
                                    <br>
                                    <label for="cantidad" class="col-form-label">Cantidad</label>
                                    <input type="number" class="form-control"  min="1" name="cantidadF7">
                                    <br>
                                    <button type="submit" name="add" href="agregar7.php" class="btn btn-primary">Guardar cambios</button>
                                    <br>
                            </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="img/mujer/Alexie.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <hr>
                          <h5 class="card-title">Alexie</h5>
                          <p class="card-text">Tommy Hilfinger (Mujer)</p>
                          <a href="#" class="btn btn-primary">Agregar a la compra</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <br>
        
            <div class="row">
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="img/mujer/Pola.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <hr>
                          <h5 class="card-title">Pola</h5>
                          <p class="card-text">Calvin Klein (Mujer)</p>
                          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal8">
                            Agregar a la compra
                          </button>
                          <div class="modal fade" id="modal8" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Información de la compra</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    <form method="POST" action="agregar8.php">
                                    <label for="Zapato" class="col-form-label" name="nombreZapato">Alexie</label>
                                    <label for="Tallas" class="col-form-label">Tallas:</label>
                                    <select class="form-select" aria-label="Default select example" name="tallaF8" id="tallaF2">
                                        <option>10</option>
                                        <option>10.5</option>
                                        <option>11</option>
                                        <option>11.</option>
                                    </select>
                                    <label for="precioZapato" class="col-form-label">Precio por unidad:</label>
                                    <br>
                                    <button type="button" class="btn btn-danger" disabled>$110</button>
                                    <br>
                                    <label for="cantidad" class="col-form-label">Cantidad</label>
                                    <input type="number" class="form-control"  min="1" name="cantidadF8">
                                    <br>
                                    <button type="submit" name="add" href="agregar8.php" class="btn btn-primary">Guardar cambios</button>
                                    <br>
                            </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="img/mujer/Lorio.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <hr>
                          <h5 class="card-title">Lorio</h5>
                          <p class="card-text">Tommy Hilfinger (Mujer)</p>
                          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal9">
                            Agregar a la compra
                          </button>
                          <div class="modal fade" id="modal9" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Información de la compra</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    <form method="POST" action="agregar9.php">
                                    <label for="Zapato" class="col-form-label" name="nombreZapato">Pola</label>
                                    <label for="Tallas" class="col-form-label">Tallas:</label>
                                    <select class="form-select" aria-label="Default select example" name="tallaF9" id="tallaF2">
                                        <option>7.5</option>
                                        <option>8</option>
                                        <option>8.5</option>
                                        <option>9</option>
                                    </select>
                                    <label for="precioZapato" class="col-form-label">Precio por unidad:</label>
                                    <br>
                                    <button type="button" class="btn btn-danger" disabled>$79</button>
                                    <br>
                                    <label for="cantidad" class="col-form-label">Cantidad</label>
                                    <input type="number" class="form-control"  min="1" name="cantidadF9">
                                    <br>
                                    <button type="submit" name="add" href="agregar9.php" class="btn btn-primary">Guardar cambios</button>
                                    <br>
                            </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="img/hombre/Grand_City.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <hr>
                          <h5 class="card-title">Grand City Venetian Driver</h5>
                          <p class="card-text">Cole Haan (Hombre)</p>
                          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal11">
                            Agregar a la compra
                          </button>
                          <div class="modal fade" id="modal11" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Información de la compra</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    <form method="POST" action="agregar11.php">
                                    <label for="Zapato" class="col-form-label" name="nombreZapato">Grand City Venetian Driver</label>
                                    <label for="Tallas" class="col-form-label">Tallas:</label>
                                    <select class="form-select" aria-label="Default select example" name="tallaF1" id="tallaF2">
                                        <option>9</option>
                                        <option>9.5</option>
                                        <option>10</option>
                                        <option>1</option>
                                    </select>
                                    <label for="precioZapato" class="col-form-label">Precio por unidad:</label>
                                    <br>
                                    <button type="button" class="btn btn-danger" disabled>$59.99</button>
                                    <br>
                                    <label for="cantidad" class="col-form-label">Cantidad</label>
                                    <input type="number" class="form-control"  min="1" name="cantidadF11">
                                    <br>
                                    <button type="submit" name="add" href="agregar11.php" class="btn btn-primary">Guardar cambios</button>
                                    <br>
                            </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="img/hombre/Panly.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <hr>
                          <h5 class="card-title">Pantly</h5>
                          <p class="card-text">Tommy Hilfinger (Hombre)</p>
                          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal12">
                            Agregar a la compra
                          </button>
                          <div class="modal fade" id="modal12" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Información de la compra</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    <form method="POST" action="agregar12.php">
                                    <label for="Zapato" class="col-form-label" name="nombreZapato">Panly</label>
                                    <label for="Tallas" class="col-form-label">Tallas:</label>
                                    <select class="form-select" aria-label="Default select example" name="tallaM2" id="tallaF1">
                                        <option>9</option>
                                        <option>9.5</option>
                                        <option>10</option>
                                        <option>10.5</option>
                                    </select>
                                    <label for="precioZapato" class="col-form-label">Precio por unidad:</label>
                                    <br>
                                    <button type="button" class="btn btn-danger" disabled>$75.99</button>
                                    <br>
                                    <label for="cantidad" class="col-form-label">Cantidad</label>
                                    <input type="number" class="form-control" id="cantUno" min="1" name="cantidadM2">
                                    <br>
                                    <button type="submit" name="add" href="agregar12.php" class="btn btn-primary">Guardar cambios</button>
                                    <br>
                            </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="img/hombre/Charged_Pursuit_3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <hr>
                          <h5 class="card-title">Charged Pusrsuit 3</h5>
                          <p class="card-text">Under Armor (Hombre)</p>
                          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal13">
                            Agregar a la compra
                          </button>
                          <div class="modal fade" id="modal13" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Información de la compra</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    <form method="POST" action="agregar13.php">
                                    <label for="Zapato" class="col-form-label" name="nombreZapato">Charged Pursuit</label>
                                    <label for="Tallas" class="col-form-label">Tallas:</label>
                                    <select class="form-select" aria-label="Default select example" name="tallaM3" id="tallaF1">
                                        <option>7.5</option>
                                        <option>8</option>
                                        <option>8.5</option>
                                        <option>9</option>
                                    </select>
                                    <label for="precioZapato" class="col-form-label">Precio por unidad:</label>
                                    <br>
                                    <button type="button" class="btn btn-danger" disabled>$69.98</button>
                                    <br>
                                    <label for="cantidad" class="col-form-label">Cantidad</label>
                                    <input type="number" class="form-control" id="cantUno" min="1" name="cantidadM3">
                                    <br>
                                    <button type="submit" name="add" href="agregar13.php" class="btn btn-primary">Guardar cambios</button>
                                    <br>
                            </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="img/hombre/Lossom.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <hr>
                          <h5 class="card-title">Lossom</h5>
                          <p class="card-text">Tommy Hilfinger (Hombre)</p>
                          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal14">
                            Agregar a la compra
                          </button>
                          <div class="modal fade" id="modal14" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Información de la compra</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    <form method="POST" action="agregar14.php">
                                    <label for="Zapato" class="col-form-label" name="nombreZapato">Lossom</label>
                                    <label for="Tallas" class="col-form-label">Tallas:</label>
                                    <select class="form-select" aria-label="Default select example" name="tallaM4" id="tallaF1">
                                        <option>9</option>
                                        <option>9.5</option>
                                        <option>10</option>
                                        <option>10.5</option>
                                    </select>
                                    <label for="precioZapato" class="col-form-label">Precio por unidad:</label>
                                    <br>
                                    <button type="button" class="btn btn-danger" disabled>$85</button>
                                    <br>
                                    <label for="cantidad" class="col-form-label">Cantidad</label>
                                    <input type="number" class="form-control" id="cantUno" min="1" name="cantidadM4">
                                    <br>
                                    <button type="submit" name="add" href="agregar4.php" class="btn btn-primary">Guardar cambios</button>
                                    <br>
                            </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="img/hombre/Swift_Run_22.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <hr>
                          <h5 class="card-title">Swift Run 22</h5>
                          <p class="card-text">Adidas Originals (Hombre)</p>
                          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal15">
                            Agregar a la compra
                          </button>
                          <div class="modal fade" id="modal15" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Información de la compra</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    <form method="POST" action="agregar15.php">
                                    <label for="Zapato" class="col-form-label" name="nombreZapato">Swift Run 22</label>
                                    <label for="Tallas" class="col-form-label">Tallas:</label>
                                    <select class="form-select" aria-label="Default select example" name="tallaM5" id="tallaF1">
                                        <option>8</option>
                                        <option>8.5</option>
                                        <option>9</option>
                                        <option>9.5</option>
                                    </select>
                                    <label for="precioZapato" class="col-form-label">Precio por unidad:</label>
                                    <br>
                                    <button type="button" class="btn btn-danger" disabled>$89.95</button>
                                    <br>
                                    <label for="cantidad" class="col-form-label">Cantidad</label>
                                    <input type="number" class="form-control" id="cantUno" min="1" name="cantidadM5">
                                    <br>
                                    <button type="submit" name="add" href="agregar15.php" class="btn btn-primary">Guardar cambios</button>
                                    <br>
                            </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="img/hombre/Electron_2.0.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <hr>
                          <h5 class="card-title">Electron 2.0</h5>
                          <p class="card-text">Puma (Hombre)</p>
                          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal16">
                            Agregar a la compra
                          </button>
                          <div class="modal fade" id="modal16" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Información de la compra</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    <form method="POST" action="agregar16.php">
                                    <label for="Zapato" class="col-form-label" name="nombreZapato">Electron 2</label>
                                    <label for="Tallas" class="col-form-label">Tallas:</label>
                                    <select class="form-select" aria-label="Default select example" name="tallaM6" id="tallaF1">
                                        <option>7</option>
                                        <option>9.5</option>
                                        <option>10</option>
                                        <option>10.5</option>
                                    </select>
                                    <label for="precioZapato" class="col-form-label">Precio por unidad:</label>
                                    <br>
                                    <button type="button" class="btn btn-danger" disabled>$65.55</button>
                                    <br>
                                    <label for="cantidad" class="col-form-label">Cantidad</label>
                                    <input type="number" class="form-control" id="cantUno" min="1" name="cantidadM6">
                                    <br>
                                    <button type="submit" name="add" href="agregar16.php" class="btn btn-primary">Guardar cambios</button>
                                    <br>
                            </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="img/hombre/Adizero_Boston_11.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <hr>
                          <h5 class="card-title">Adizero Boston 11</h5>
                          <p class="card-text">Vans (Hombre)</p>
                          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal17">
                            Agregar a la compra
                          </button>
                          <div class="modal fade" id="modal17" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Información de la compra</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    <form method="POST" action="agregar17.php">
                                    <label for="Zapato" class="col-form-label" name="nombreZapato">Adizero Boston 11</label>
                                    <label for="Tallas" class="col-form-label">Tallas:</label>
                                    <select class="form-select" aria-label="Default select example" name="tallaM7" id="tallaF1">
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                    </select>
                                    <label for="precioZapato" class="col-form-label">Precio por unidad:</label>
                                    <br>
                                    <button type="button" class="btn btn-danger" disabled>$150</button>
                                    <br>
                                    <label for="cantidad" class="col-form-label">Cantidad</label>
                                    <input type="number" class="form-control" id="cantUno" min="1" name="cantidadM7">
                                    <br>
                                    <button type="submit" name="add" href="agregar17.php" class="btn btn-primary">Guardar cambios</button>
                                    <br>
                            </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="img/hombre/Fresh_Foam_680v7.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <hr>
                          <h5 class="card-title">Fresh Foam 680v7</h5>
                          <p class="card-text">New Balance (Hombre)</p>
                          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal18">
                            Agregar a la compra
                          </button>
                          <div class="modal fade" id="modal18" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Información de la compra</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    <form method="POST" action="agregar18.php">
                                    <label for="Zapato" class="col-form-label" name="nombreZapato">Fresh Foam 680v7</label>
                                    <label for="Tallas" class="col-form-label">Tallas:</label>
                                    <select class="form-select" aria-label="Default select example" name="tallaM8" id="tallaF1">
                                        <option>7</option>
                                        <option>7.5</option>
                                        <option>8</option>
                                        <option>9</option>
                                    </select>
                                    <label for="precioZapato" class="col-form-label">Precio por unidad:</label>
                                    <br>
                                    <button type="button" class="btn btn-danger" disabled>$79.99</button>
                                    <br>
                                    <label for="cantidad" class="col-form-label">Cantidad</label>
                                    <input type="number" class="form-control" id="cantUno" min="1" name="cantidadM8">
                                    <br>
                                    <button type="submit" name="add" href="agregar18.php" class="btn btn-primary">Guardar cambios</button>
                                    <br>
                            </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="img/hombre/SK8_Low.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <hr>
                          <h5 class="card-title">SKB-Low</h5>
                          <p class="card-text">Vans (Hombre)</p>
                          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal19">
                            Agregar a la compra
                          </button>
                          <div class="modal fade" id="modal19" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Información de la compra</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    <form method="POST" action="agregar19.php">
                                    <label for="Zapato" class="col-form-label" name="nombreZapato">SK8 Low</label>
                                    <label for="Tallas" class="col-form-label">Tallas:</label>
                                    <select class="form-select" aria-label="Default select example" name="tallaM9" id="tallaF1">
                                        <option>6.5</option>
                                        <option>7</option>
                                        <option>7.5</option>
                                        <option>8</option>
                                    </select>
                                    <label for="precioZapato" class="col-form-label">Precio por unidad:</label>
                                    <br>
                                    <button type="button" class="btn btn-danger" disabled>$70</button>
                                    <br>
                                    <label for="cantidad" class="col-form-label">Cantidad</label>
                                    <input type="number" class="form-control" id="cantUno" min="1" name="cantidadM9">
                                    <br>
                                    <button type="submit" name="add" href="agregar19.php" class="btn btn-primary">Guardar cambios</button>
                                    <br>
                            </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="img/hombre/ASICS_Sportstyle.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <hr>
                          <h5 class="card-title">ASICS Sportstyle</h5>
                          <p class="card-text">Japan 5 (Hombre)</p>
                          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal20">
                            Agregar a la compra
                          </button>
                          <div class="modal fade" id="modal20" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Información de la compra</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    <form method="POST" action="agregar20.php">
                                    <label for="Zapato" class="col-form-label" name="nombreZapato">ASICS Sportstyle</label>
                                    <label for="Tallas" class="col-form-label">Tallas:</label>
                                    <select class="form-select" aria-label="Default select example" name="tallaM10" id="tallaF1">
                                        <option>7</option>
                                        <option>7.5</option>
                                        <option>9</option>
                                        <option>10</option>
                                    </select>
                                    <label for="precioZapato" class="col-form-label">Precio por unidad:</label>
                                    <br>
                                    <button type="button" class="btn btn-danger" disabled>$80</button>
                                    <br>
                                    <label for="cantidad" class="col-form-label">Cantidad</label>
                                    <input type="number" class="form-control" id="cantUno" min="1" name="cantidadM10">
                                    <br>
                                    <button type="submit" name="add" href="agregar20.php" class="btn btn-primary">Guardar cambios</button>
                                    <br>
                            </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <a href="pages/facura.php" type="submit" class="btn btn-primary">Finalizar compra</a>
            <br>
            <br>

        </div>
    </div>

    <br>
    <br>
    <hr>

    <!--Aqui empieza la parte de "factura"-->

    <br>
    <br>

    <div class="container">
    <h1 class="page-header text-center">Factura</h1>
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">            
            <table class="table table-bordered table-striped" style="margin-top:20px;">
                <thead>
                    <th>Descripción</th>
                    <th>Marca</th>
                    <th>Precio por unidad</th>
                    <th>Categoria</th>
                    <th>Talla</th>
                    <th>Cantidad</th>
                </thead>
                <tbody>
                    <?php

                        $presioT=0;
                        $presioF;
                        $iva;
                        $presioIva;
                        $envio;

                        //Abrimos donde están todos los productos guardados
                        $compras = simplexml_load_file('compras.xml');
                        foreach ($compras->compra as $compra ) { //compra es cada uno de los productos que se han guardado
                        
                        $presioT+=$compra->Precio*$compra->Cantidad;
                        var_dump($presioT);
                        
                    ?>
                    <tr>
                        <td><?=$compra->Descripcion?></td>
                        <td><?=$compra->Marca?></td>
                        <td><?=$compra->Precio?></td>
                        <td><?=$compra->Categoria?></td>
                        <td><?=$compra->Talla?></td>
                        <td><?=$compra->Cantidad?></td>
                    </tr>
                    <?php
                        } //Cerramos el foreach anterior
                    ?>
                </tbody>
            </table>
         
            <?php

                    if ($presioT < 150) {
                        $envio=round($presioT*0.15);
                        $presioF=round($presioT+$envio);
                        $iva=round($presioF*0.13);
                        $presioIva=round($presioF+$iva);
                        echo "<h3>Monto total de los productos sin añadidos: $presioT</h3>";
                        echo "<h3>Costo de envio: $envio</h3>";
                        echo "<h3>Iva: $iva</h3>";
                        echo "<h2>Costo total: $presioIva</h2>";
                    }
                    if ($presioT >= 150 && $presioT < 250) {
                        $envio= round($presioT*0.10);
                        $presioF=round($presioT+$envio);
                        $iva=round($presioF*0.13);
                        $presioIva=round($presioF+$iva);
                        echo "<h3>Monto total de los productos sin añadidos: $presioT</h3>";
                        echo "<h3>Costo de envio: $envio</h3>";
                        echo "<h3>Iva: $iva</h3>";
                        echo "<h2>Costo total: $presioIva</h2>";
                    }
                    if ($presioT >= 250 && $presioT < 450) {
                        $envio=round($presioT*0.05);
                        $presioF=round($presioT+$envio);
                        $iva=round($presioF*0.13);
                        $presioIva=round($presioF+$iva);
                        echo "<h3>Monto total de los productos sin añadidos: $presioT</h3>";
                        echo "<h3>Costo de envio: $envio</h3>";
                        echo "<h3>Iva: $iva</h3>";
                        echo "<h2>Costo total: $presioIva</h2>";
                    }
                    if ($presioT >= 450) {
                        $iva=round($presioT*0.13);
                        $presioIva=round($presioT+$iva);
                        echo "<h3>Monto total de los productos sin añadidos: $presioT</h3>";
                        echo "<h3>Costo de envio: GRATIS</h3>";
                        echo "<h3>Iva: $iva</h3>";
                        echo "<h2>Costo total: $presioIva</h2>";
                    }
                
            ?>
        </div>
    </div>
</div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>