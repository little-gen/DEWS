<?php
if (isset($_GET['pokemon'])) {
    $pokemon = $_GET['pokemon'];
    $url = "https://pokeapi.co/api/v2/pokemon/$pokemon";
    $result = file_get_contents($url);
    if ($result === false) {
        header("Location:index.php");
        exit();
    }
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
            if(!empty($datos->sprites->front_default)){
            echo '<img src=' . $datos->sprites->front_default . '>';
            echo '<img src=' . $datos->sprites->back_default . '>';
            }else{
                header("Location:index.php");
                exit();
            }
            
            ?>
            <a href="index.php" class="atras">Buscar</a>
        </div>
    </body>
    </html>
<?php
}
?>

