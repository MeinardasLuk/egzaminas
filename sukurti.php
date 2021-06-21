<?php
include "dblog.php"
?>
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
            <li><a href="index.php">Skelbimai</a> </li>
            <li><a href="#">Kategorijos</a> </li>
            <li><a href="#">Mano skelbimai</a> </li>
        </ul>
    </nav>
</header>
<div class="container ">
    <form method="GET">
        <input type="text" name="title" placeholder="Pavadinimas" class="create-title">
        <textarea name="content" class="create-text"></textarea>
        <button name="new_post" class="create-btn">Sukurti</button>
    </form>
</div>


</body>






</html>
