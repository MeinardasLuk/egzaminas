<?php
session_start();
    include "dblog.php"

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title >Egzaminas</title>
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <header>
            <img class="logo" src="https://image.flaticon.com/icons/png/512/759/759701.png" alt="logo">
            <nav>
                <ul class="nav-links">
                    <li><a href="sukurti.php">+ Sukurti skelbimą</a> </li>
                    <li><a href="#">Skelbimai</a> </li>
                    <li><a href="#">Kategorijos</a> </li>
                    <li><a href="#">Mano skelbimai</a> </li>
                </ul>
            </nav>
        </header>

    <?php if(isset($_REQUEST['info'])) {?>
        <?php if($_REQUEST['info']=="added"){?>
            <div class="alert alert-success" role="alert">Skelbimas pridėtas!</div>
            <?php }?>
    <?php }?>


    <div class="row">
        <?php
        $conn =mysqli_connect("localhost","root","", "egzam");
        $sql = "SELECT * FROM data";
        $query =mysqli_query($conn, $sql);;
        foreach ( $query as $q) {
            ?>
            <div class="card-box">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $q['title'];?></h5>
                        <p class="card-text"><?php echo $q['content'];?></p>
                        <a href="" class="card-btn">Skaityti daugiau</a>
                    </div>
                </div>
            </div>
        <?php }?>
    </div>

    </body>






</html>
