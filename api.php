<?php
/**
 * Comprueba si se recibe un nombre de Pokémon por parámetro y obtiene sus datos de la API.
 * Muestra la información del Pokémon si se encuentra, o redirecciona en caso contrario.
 */
if (isset($_GET['pokemon'])) {
    /**
     * @var string $pokemon Nombre del Pokémon recibido por parámetro.
     */
    $pokemon = $_GET['pokemon'];
        
    /**
     * @var string $url URL de la API de Pokémon para obtener los datos del Pokémon.
     */
    $url = "https://pokeapi.co/api/v2/pokemon/$pokemon";
      /**
     * @var $result Contiene la respuesta de la API en formato JSON o false si falla.
     */
    $result = file_get_contents($url);
    //Si el resultado no existe redirecciono a pagina principal y doy un alert
    if ($result === false) {
         echo "<script>alert('No se encuentra el Pokémon'); "
        . "window.location.href='index.php';</script>";
        exit();
    }
       /**
     * @var object $datos Decodificación de la respuesta JSON de la API.
     */
    $datos = json_decode($result);
    ?>

    <html>
    <head>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                padding: 0;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                height: 100vh;
            }

            .pokemon {
                background: white;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                text-align: center;
                max-width: 400px;
                width: 100%;
            }

            .pokemon img {
                margin: 10px;
                border-radius: 10px;
                width: 200px;
            }

            .atras {
                margin-top: 20px;
                padding: 10px 20px;
                background-color: #04AA6D;
                color: white;
                text-decoration: none;
                border-radius: 5px;
                font-size: 16px;
                transition: background-color 0.3s;
            }

            .atras:hover {
                background-color: #45a049;
            }
        </style>
    </head>
    <body>
        <div class="pokemon">
            <?php
             /**
             * Verifica si la API devuelve imágenes del Pokémon y las muestra.
             * Si no existen, muestra una alerta y redirecciona.
             */
            if(!empty($datos->sprites->front_default)){
            echo '<img src=' . $datos->sprites->front_default . '>';
            echo '<img src=' . $datos->sprites->back_default . '>';
            }else{
                echo "<script>alert('No se puede cargar la imagen'); "
                . "window.location.href='index.php';</script>";
                 exit();
            }
            
            ?>
            <a href="index.php" class="atras">Buscar Otro</a>
        </div>
    </body>
    </html>
<?php
}
?>

