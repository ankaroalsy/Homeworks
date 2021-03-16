/*Una agencia vendedora de autos desea un sistema computacional para administrar
Los datos de sus vehículos y clasificarlos por tipo. Todos los autos tienen los 
siguientes datos: número de serie del motor, placa, color, marca, año, precio.
Los vehículos se clasifican en autos, camionetas y vagonetas. Para los autos y 
vagonetas, también es importante almacenar la cantidad de pasajeros mientras que
para las camionetas Se deben controlar la capacidad de carga en kilogramos y la 
cantidad de ejes y de rodadas. Modele este sistema con diagramas de clase UML 
indicando las relaciones de herencia y codifique un sistema mediante el cual se 
genere instancia de las clases auto y camioneta, donde el usuario captura de 
sus datos e inserte los respectivos objetos.*/
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herencia 1</title>
    <link rel="stylesheet" href="view/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="view/css/style.css">
    <script src="view/js/jquery.js"></script>
    <script src="view/js/jquery.validate.js"></script>
    <script src="view/bootstrap/bootstrap.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 offset-0 col-sm-12 offset-sm-0 col-md-6 offset-md-3">
                <form action="controller/controller.php" method="post">
                    <h2>Registra un vehículo</h2>
                    <div class="form-group">
                        <select name="type" id="type" class='form-control'>
                            <option value="">--SELECIONA EL TIPO DE VEHÍCULO--</option>
                            <option value="auto">Auto</option>
                            <option value="vagoneta">Vagoneta</option>
                            <option value="camioneta">Camioneta</option>
                        </select>
                    </div>
                    <div id="custom-auto" style='display:none;'>
                    <div class="form-group">
                        <label for="cant_pasajeros1">Cantidad de pasajeros soportados</label>
                        <input type="text" name="cant_pasajeros1" id="cant_pasajeros1" class='form-control'>
                    </div>
                    </div>
                    <div id="custom-vagoneta" style='display:none;'>
                    <div class="form-group">
                        <label for="cant_pasajeros">Cantidad de pasajeros soportados</label>
                        <input type="text" name="cant_pasajeros" id="cant_pasajeros" class='form-control'>
                    </div>
                    </div>
                    <div id="custom-camioneta" style='display:none;'>
                        <div class="form-group">
                            <label for="cant_kgs">Cantidad de Kilogramos soportados</label>
                            <input type="text" name="cant_kgs" id="cant_kgs" class='form-control'>
                        </div>
                        <div class="form-group">
                            <label for="ejes">Ejes</label>
                            <input type="text" name="ejes" id="ejes" class='form-control'>
                        </div>
                        <div class="form-group">
                            <label for="rodadas">Rodadas</label>
                            <input type="text" name="rodadas" id="rodadas" class='form-control'>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nro_serie_motor">Numero de serie del motor</label>
                        <input type="text" name="nro_serie_motor" id="nro_serie_motor" class='form-control'>
                    </div>
                    <div class="form-group">
                        <label for="placa">Placa</label>
                        <input type="text" name="placa" id="placa" class='form-control'>
                    </div>
                    <div class="form-group">
                        <label for="color">Color</label>
                        <input type="text" name="color" id="color" class='form-control'>
                    </div>
                    <div class="form-group">
                        <label for="marca">Marca</label>
                        <input type="text" name="marca" id="marca" class='form-control'>
                    </div>
                    <div class="form-group">
                        <label for="anio">Anio</label>
                        <input type="text" name="anio" id="anio" class='form-control'>
                    </div>
                    <div class="form-group">
                        <label for="precio">Precio</label>
                        <input type="text" name="precio" id="precio" class='form-control'>
                    </div>
                    <button type="submit" name="save" id="save" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
    <script src="view/js/index.js"></script>
</body>
</html>
