<?php
session_start();
unset($_SESSION["reg__"]);
unset($_SESSION["name__"]);
unset($_SESSION["avg__"]);
unset($_SESSION["data_entered__"]);
unset($_SESSION["no_data_retrieval"]);
extract($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="./css/Home.css" />
        <script src="./index.js" defer></script>
        <style>
            body {
                margin: 0px;
                padding: 0px;
            }
        </style>
        <title>Home</title>
    </head>
    <body>
        <div class="header">
            <p>Welcome to Student Information Centre</p>
            <a href="logout.php"><button class="logout">Logout</button></a>
        </div>
        <div class="buttons">
            <div class="clicks">
                <button onclick="Data_E()">Data Entry</button>

                <button onclick="Data_R()">Data Retrieval</button>
            </div>
        </div>
        <div class="sports">
            <p>Favourite e-Sports Players</p>
        </div>
        <div class="container">
            <div class="image">
                <a href="twitch.tv/shahzam"
                    ><img
                        src="https://images.squarespace-cdn.com/content/v1/5aa9…layer_Pics_2021_VALORANT_ShahZaM.png?format=1000w"
                        alt="Shahzam"
                /></a>
            </div>
            <div class="image">
                <a href="twitch.tv/tenz"
                    ><img
                        src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fliquipedia.net%2Fvalorant%2FTenZ&psig=AOvVaw3gjKCMAoWqaqlGnaLvdK3i&ust=1639149073364000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCIjpiKaA1_QCFQAAAAAdAAAAABAD"
                        alt="TenZ"
                /></a>
            </div>
            <div class="image">
                <a href="twitch.tv/zombs"
                    ><img
                        src="https://images.squarespace-cdn.com/content/v1/5aa9…_Player_Pics_2021_VALORANT_Zombs.png?format=1000w"
                        alt="Zombs"
                /></a>
            </div>
            <div class="image">
                <a href="twitch.tv/sick_cs"
                    ><img
                        src="https://images.squarespace-cdn.com/content/v1/5aa9…e_Player_Pics_2021_VALORANT_SicK.png?format=1000w"
                        alt="Sick"
                /></a>
            </div>
            <div class="image">
                <a href="twitch.tv/dapr"
                    ><img
                        src="https://images.squarespace-cdn.com/content/v1/5aa9…e_Player_Pics_2021_VALORANT_Dapr.png?format=1000w"
                        alt="Dapr"
                /></a>
            </div>
        </div>
        <footer class="foot">
            <p><?php  echo $name  ?></p>
            <p><?php  echo $email  ?></p>
            <p><?php  echo $reg  ?></p>
        </footer>
    </body>
</html>
