<!DOCTYPE html>
<html>
    <head>
        <title>GERADOR DE 5 NÚMEROS ALEATÓRIOS</title>

        <meta charset="UTF-8">
        <style type="text/css">       
            body{
                background-color:#151515;
                background-size:100%;
            }
            h1{
                font-weight: bold;
                color: #ffb003;
                font-family: verdana;
            }
            p{
                font-size: 35px;
                color: #ffb003;
                font-family: verdana;
            }
            
            input[type=submit]{
                width: 400;
                height: 400;
                padding: 12px 20px;
                margin: 8px 0;
                box-sizing: border-box;
                color: white;
                background-color:#ffcc00;
                font-weight:bold;
            }
        </style>
    </head>
    <body align="center">
        <h1>GERADOR DE 5 NÚMEROS ALEATÓRIOS</h1>

        <form method="POST">
            <input type="submit" name="button" value="GERAR AGORA">
        </form>
        <br><br>
        
        <?php
            if($_POST)
            {
                $aleatorio = [rand(1,100),rand(1,100),rand(1,100),rand(1,100),rand(1,100)];

                foreach($aleatorio as $content){
                    echo "<p>$content</p><br>";
                }
            }
        ?>
    </body>
</html>
