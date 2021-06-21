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
            <li><a href="#">Prisijungti</a></li>
        </ul>
    </nav>
</header>
<div id="main">
    <h1>Login</h1>
    <form method="post" class="login" >
        Username <input type="text" name="vardas" placeholder="Username:vardas" class="text" autocomplete="off" required>
        Password <input type="password" name="pass" placeholder="Password:pass" class="text" required>
        <input type="submit" name="login" id="sub">
    </form>
</div>

</body>
</html>
<?php
if (isset($_POST['login'])){
    $un=$_POST['vardas'];
    $pw=$_POST['pass'];

    if ($un=='vardas' && $pw=='pass'){
        header("location: index.php");
        exit();
    }
    else
        echo "Invalid username or password";

}

?>
