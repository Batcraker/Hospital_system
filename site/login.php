<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/login.css">
	<title>Iniciar session</title>
</head>
<body>
	<div class="main-container">
		<div class="header">
            <nav>
                <ul class="menu">
                    <li><a href="index.html">Inicio</a></li>
                    <li><a href="login.php">Iniciar Session</a></li>
                    <li><a href="register.php">Registrar</a></li>
                    <li><a href="#">Administracion</a></li>
                </ul>
            </nav>
        </div>

        <div class="flex">
        	<div class="login">
        		<form method="post" id="formulario">
        			<h1>Iniciar</h1>
        			<div class="input">
        				<input type="text" name="user" id="user" placeholder="Usuario" autocomplete="off">
        			</div>
        			<div class="input">
        				<input type="password" name="password" id="password" placeholder="Contraseña" autocomplete="off">
        			</div>
        			<input type="submit" value="Iniciar">
        		</form>
                <div class="style"></div>
        	</div>
        </div>
	</div>
	
</body>
</html>