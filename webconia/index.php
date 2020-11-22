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
                  <br><br>
                <span style="font-size:25px">Willkommen zum Anmeldeformular für die diesjährige</span>
                  <br><br>
                <span style="color:#01A9DB;font-size:20px">WTC (Webconia Technology Conference)</span>
                  <br><br>
                Um sich zu registrieren, füllen Sie bitte die folgenden Felder aus:
                  <br><br>
                  <br><br>
                <div id="formular">
                      <form action="seite2.php" method="post">
						Vorname: <input type="text" name="vorname" />
						Nachname: <input type="text" name="nachname" />
						E-Mail: <input type="text" name="email" />
						Firma: <input type="text" name="firma" />
							<br><br>
						<input type="submit" value="Absenden" />
			          </form>
                </div>
            </div>    

            <div class="fuss">
                <br>Philip Borges<br><span style="color:#FFFFFF">webconia GmbH <br> Gänsemarkt 31, 20354 Hamburg</span>
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