<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Interactuar con la Base de datos solo si hay conexión a Internet</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <script type="text/javascript">
        window.onload = function status()
        {
            if(navigator.onLine)
            {
                //alert("Si hay conexión a Internet");
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                      document.getElementById("mensaje").innerHTML =
                      this.responseText;
                    }
                };
                xhttp.open("GET", "php/leer.php", true);
                xhttp.send();
            }
            else
            {
                //alert("No hay conexión a Internet");
                var msgfalse = "<span style='color:red;'>No hay conexión a Internet !</span>";
                document.getElementById('mensaje').innerHTML = msgfalse;
            }
        }
    </script>

</head>
<body>

    <div class="container">

        <div class="row">        

            <div class="col-md-12">

                <h1>Interactuar con la Base de datos solo si hay conexión a Internet</h1>

                <div id="mensaje"> </div>

            </div>

        </div>

        <br><br>


        <footer>

          <div class="container text-center">

            <p class="text-muted credit">

              Desarrollado por <a href="http://www.collectivecloudperu.com" target="blank">Collective Cloud Peru</a>

            </p>

          </div>        

        </footer>  

    </div>

</body>
</html>
