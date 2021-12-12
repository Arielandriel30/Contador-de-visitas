<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
    <title>Contador Extraterrestre</title>
</head>
<body>
<form class="w3-container w3-card-4" action="contador.php" method="post">
<p>
<label for="cars">Ingrese sus datos</label>
  
  <input class="w3-input" type="text" name="nombre" placeholder="Nombre" required></p>
  <p>
  <label for="cars">Planeta Perteneciente</label>
<select name="planeta" >
  <option value="Marte">Marte</option>
  <option value="Saturno">Saturno</option>
  <option value="jupiter">Jupiter</option>
  <option value="pluton">Plutón</option>
  <option value="Tierra">Tierra</option>
  <option value="Mercurio">Mercurio</option>
  <option value="Venus">Venus</option>
  <option value="Urano">Urano</option>
  <option value="Neptuno">Neptuno</option>
  <option value="Ceres">Ceres</option>
  <option value="Eris">Eris</option>
</select>
<input type="submit" class="w3-button w3-khaki" name="mostrar">
</form>
</body>
</html>