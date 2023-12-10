<style>
    #nickname{
        height: 50px;
        width: 200px;
        background-color: gray;
        text-align: center;
        position: relative;
        left: 668px;
        padding-top: 7px;
        padding-bottom: 5px;
    }
    #logout{
        height: 50px;
        width: 200px;
        font-size: 18px;
        text-align: center;
        position: relative;
        left: 668px;
    }
</style>
<?php
    include('components/header.php');
    session_start();

    if (isset($_SESSION['login'])) {
        echo "<a href='profile.php'><div id='nickname'><p>Witaj " .$_SESSION['login'] ." !</p>";
        echo "</div></a>";
        echo "<form action='scripts/logout.php'>"; 
        echo "<br>";
        echo"<input type='submit' id='logout' value='WYLOGUJ'/>";                           
    }  
?>