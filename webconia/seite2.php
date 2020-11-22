<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>eCommerce Agentur Hamburg</title>
  <link rel='icon' href='favicon.ico' type='image/x-icon' >
  <style type="text/css">
    body{
    margin: 0;
    padding: 0;
    font-family: 'Lato', sans-serif;
    background-color: #FFFFFF;
}

/* Website Einstellungen */

/* Kopf */

.kopf {
    height: 15%;
    text-align: center;
    color: black;
    margin-top: 30px;
}

/* Navigationsleiste */
.menue {
  text-align:center;
}
.menue ul {
    list-style-type: none;
    margin: 0;					
    padding: 0;					
    width: 100%;
    overflow: hidden;
    background-color: #FFFFFF;
}
.menue li {
  display:inline-block;
}
.menue li a {
    display: block;
    color: #000;
    padding: 14px 16px;
    text-decoration: none;
    text-align: center;
}
.menue li a:hover {
    background-color: #555;
    color: white;
}

/* Inhalt */

.inhalt {
    width: 100%;
    height: 60px;
    position: relative;
    text-align: center;
    margin: auto;
    margin-top: 25px;
}

/* Fuss */

.fuss {
    height: 190px;
    width: 100%;
    text-align: center;
    position: absolute;
    margin-top: 600px;
    background-color:#0A122A;
}

  </style>
</head>
    <body>
            <div class="kopf">
		<a href="index.php"><img src="https://s3.eu-central-1.amazonaws.com/4scotty-prod/logos/3ApBNdkiACMxxAGuA/400_logo_jpg" height="80" width="350"></a>
            </div>

            <div class="menue">
                <ul>
                    <li><a href="unterseiten/leistungen.php">Leistungen</a></li>
                    <li><a href="unterseiten/referenzen.php">Referenzen</a></li>
                    <li><a href="unterseiten/projekte.php">Projekte</a></li>
                    <li><a href="unterseiten/ueberuns.php">Über uns</a></li>
                    <li><a href="unterseiten/karriere.php">Karriere</a></li>
                </ul>
            </div>

        <div class="inhalt">
                <img src="hamburg.jpg" width="500" height="325">

                <?php
		        $db = mysqli_connect("localhost","root","")
		        or die("Ein Fehler ist aufgetreten: ".mysqli_connect_error());
		
		        mysqli_select_db($db, "webconia")
		        or die("Ein Fehler ist aufgetreten: ".mysqli_connect_error());
		
		        $vorname = $_POST["vorname"];
		        $nachname = $_POST["nachname"];
		        $email = $_POST["email"];
		        $firma = $_POST["firma"];
		
		        if($vorname == "" or $nachname == "" or $email == "" or $firma == "") {
				echo '<br><br><img src="triangle.jpg" width="50" height="50"/>';
			        echo nl2br ("\n \n \n Sie haben das Formular nicht vollständig ausgefüllt.\n\nBitte versuchen Sie es erneut.");
		        } else {
			        $eintrag = "INSERT INTO teilnehmer
			        (vorname, nachname, email, firma)
		
			        VALUES
			        ('$vorname', '$nachname', '$email', '$firma')";
		
			        $eintragen = mysqli_query($db, $eintrag);
		
		        if($eintragen == true) {
				echo  nl2br ("\n \n Die Registrierung war erfolgreich. \n \n<font color=#01A9DB size='15pt'>Vielen Dank!</font> \n \n Sie erhalten in Kürze eine E-Mail von uns mit allen wichtigen Informationen.");
			} else {
			        echo "Ein Fehler ist aufgetreten, bitte versuchen Sie es erneut.";
			        }
		        }
		        mysqli_close($db);
		
		        ?>
        </div>
        
            <div class="fuss">
                <span style="color:#FFFFFF"><br><br>webconia GmbH <br> Gänsemarkt 31, 20354 Hamburg</span>
		 <br><br>
		<span style="color:#2E2E2E">
                	Bilder: <br> 
                	https://unsplash.com/photos/j22K61_1peg <br> 
                	https://pixabay.com/vectors/triangle-warning-blue-36068/ <br>
                	https://s3.eu-central-1.amazonaws.com/4scotty-prod/logos/3ApBNdkiACMxxAGuA/400_logo_jpg <br> 
                	https://www.webconia.de/wp-content/uploads/2019/10/cropped-webconia_favicon-32x32.png
                </span>
            </div>
    </body>
</html>
