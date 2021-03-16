/*Un equipo de beisbol se compone de tres tipos de jugadores: pitchers, jugadores
De posicion y bateadores designados. Los datos de cada jugador son: el numero de 
uniforme, nombre y su posicion. En esta liga, los pitchers lanzan, participan a la 
Defensiva pero no batean. Los bateadores designados no lanzan y no participan a la 
defensiva(solo batean). Los jugadores de posición no lanzan, pero participan a la 
defensiva y batean. Modele un sistema orientado a objetos con diagramas de clases 
UML indicando las relaciones de Herencia con clases heredadas con el que controle
los ponches recetados por los pitchers, los hits bateados por los otros jugadores 
y los errores cometidos Por quienes participan a la defensiva. Y codifique un sistema
mediante el cual se genere instancias de las clases jugador y jugador posición, donde
El usuario captura sus datos Y se inserten en los respectivos objetos.*/

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herencia 2</title>
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
                        <select name="tipo" id="tipo" class='form-control'>
                            <option value="">--SELECIONA EL TIPO DE JUGADOR--</option>
                            <option value="bateador">Bateador</option>
                            <option value="pitcher">Pitcher</option>
                            <option value="jdeposicion">Jugador De Posicion</option>
                        </select>
                    </div> 
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" id="nombre" class='form-control'>
                    </div>
                    <div class="form-group">
                        <label for="posicion">Posicion del jugador</label>
                        <input type="text" name="posicion" id="posicion" class='form-control'>
                    </div>
                    <div class="form-group">
                        <label for="nro_uniforme">Nro uniforme</label>
                        <input type="text" name="nro_uniforme" id="nro_uniforme" class='form-control'>
                    </div>
                    <button type="submit" name="agregar" id="agregar" class="btn btn-primary">Agregar</button>
                </form>
            </div>
        </div>
    </div>
    <script src="view/js/index.js"></script>
</body>
</html>
