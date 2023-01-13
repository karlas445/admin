<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-3.2.1.min.js"></script>
    <title>Document</title>
</head>
<body>
<header>
        <div class="contenedor">

            <a href="index.php" class='btnIndex'>
                <img class="imgCabecera" src="recursos/logo-fasda-gris.png">
            </a>

            <h1 class="tituloLogin">FAST DATA TECHNOLOGIES</h1>

        </div>
    </header>

    <div class="divLogin">

        <h2 class="titulo2">Inicio de sesión</h2>

        <form id="frmLogin">
        <label for="txtUsuario" class="lblLogin">Usuario:</label>
        <input type="text" class="txtLogin" id="txtUsuario" autocomplete="off">
        <label for="txtPassword" class="lblLogin">Password:</label>
        <input type="password" class="txtLogin" id="txtPassword">

        </form>

        <input type="submit" id="btnEntrar" class="btnLogin" value="Entrar">

    </div>

</body>
</html>
<script type="text/javascript">

	$(document).ready(function(){
		$('#btnEntrar').click(function(){
			if($('#txtUsuario').val()==""){
				alert("Debes agregar el usuario");
				return false;
			}else if($ ('#txtPassword').val()==""){
				alert("Debes agregar la contraseña");
				return false;
			}
            
            cadena= "usuario=" + $('#txtUsuario').val() +
			        "&password=" + $('#txtPassword').val();

					$.ajax({
						type:"POST",
						url:"db-php/acceso.php",
						data:cadena,
						success:function(data){
                            console.log(data);
							if(data==1){
								$(location).attr('href', 'principal.php');
							}else if(data==2){
								alert("Usuario o Contraseña Incorrectos!");
								$('#frmLogin')[0].reset();
							}else{
								alert("Fallo al entrar :( "+data);
								$('#frmLogin')[0].reset();
							}
						}
					});
		});	
	});
</script>