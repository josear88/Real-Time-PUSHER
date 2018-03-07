<?php
include "config/index.php";

$query = mysqli_query($link,'SELECT * FROM info ORDER BY id DESC');

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Pusher Test</title>
        <link rel="stylesheet" href="css/styles.css">
        <script src="https://js.pusher.com/4.1/pusher.min.js"></script>
    </head>
    <body>
        <div>
            <?php
                print "<span id='num-comentarios'>".mysqli_num_rows($query)."</span>";
            ?>
        </div>
        <form action="notifications/" method="POST">
            <input type="text" name="info">
            <button type="submit">ENVIAR</button>
        </form>
        <div id="info2"></div>
        <div id="info">
            <?php
                while($row=mysqli_fetch_array($query)){
                    print $row['content']."<br>";
                }

            ?>
        </div>

        <script>

            //Enable pusher logging - don't include this in production
            // Pusher.logToConsole = true;


            var pusher = new Pusher('cc65b85352b508063ab5', {
                cluster: 'us2',
                encrypted: true
            });
            var numero = <?php print  mysqli_num_rows($query) ?>;
            var channel = pusher.subscribe('my-channel');
            channel.bind('my-event', function (data) {
                document.getElementById('info2').innerHTML+=data.message+'<br>';
                numero = parseInt(numero) + 1;
                document.getElementById('num-comentarios').innerHTML=numero;

            });


        </script>
    </body>
</html>
