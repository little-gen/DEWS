<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
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
form {
    background: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}
input[type="text"] {
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 5px;
    width: 200px;
}
#sugerencias {
    margin-top: 10px;
    background: white;
    padding: 10px;
    border-radius: 5px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    min-height: 50px;
    width: 250px;
    text-align: center;
}
footer {
    margin-top: 20px;
    font-size: 12px;
    color: #666;
}
button {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
  border-radius: 5px;
  transition-duration: 0.4s;
}

button:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
  background-color: #04AA6D;
  color: white;
}
    </style>
    </head>
    <body>
        <form method="GET" action="api.php">
            Pokemon: 
            <input type="text" id="pokemon" name="pokemon">
            <button type="submit">Buscar</button>
        </form>
        <div id="imgPokemon"></div>
        <footer>Iván Escudero Gutiérrez 23043561E</footer>
    </body>

</html>
