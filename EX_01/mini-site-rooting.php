<!DOCTYPE html>
<html>
    <meta charset="utf-8"/>
    <title>Mini Site Rooting</title>
</head>
<body>
    <header>
        <nav>
            <a href="http://localhost:8888/ISCC-2020/ISCC-2020-J09/EX_01/mini-site-rooting.php?page=1">Accueil!</a>
            <a href="http://localhost:8888/ISCC-2020/ISCC-2020-J09/EX_01/mini-site-rooting.php?page=2">Page 2!</a>
            <a href="http://localhost:8888/ISCC-2020/ISCC-2020-J09/EX_01/mini-site-rooting.php?page=3">Page 3!</a>
            <a href="http://localhost:8888/ISCC-2020/ISCC-2020-J09/EX_01/mini-site-rooting.php?page=connexion">Connexion</a>
            <a href="http://localhost:8888/ISCC-2020/ISCC-2020-J09/EX_01/mini-site-rooting.php?page=admin">Admin</a>
        </nav>
    </header>

</body>
</html>

<?php
    if($_GET['page'] == '1')
    {
        echo '<h1>Accueil!</h1>';

    }
    elseif($_GET['page'] == '2')
    {
        echo '<h1>Page 2!</h1>';
    }
    elseif($_GET['page'] == '3')
    {
        echo '<h1>Page 3!</h1>';
    }
    elseif($_GET['page']== 'connexion')
    {
        echo '<h1>Connexion</h1>';
        include('connexion.php');

    }

    session_start();
    if(isset($_SESSION['id']))
    {
        echo '<p> Login: ' .$_SESSION['id']. '</p>';
        if($_COOKIE['id'])
        {
            $_SESSION['id'] = $_COOKIE['id'];
        }
        else
        {
        echo "<p> Cliquez <a href='http://localhost:8888/ISCC-2020/ISCC-2020-J09/EX_01/mini-site-rooting.php?page=connexion'>ici</a> pour vous connecter.</p>";
        }
    }

?>

