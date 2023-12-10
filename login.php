<?php
    include('components/header.php');
?>
<link rel="stylesheet" href="styles/form.css">
<link rel="stylesheet" href="styles/header.css">
<link rel="stylesheet" href="styles/root.css"> 
            <div id="form">
            <form action="scripts/login_script.php" method="POST"> 
            <label for="login">Login:</label>
            <input type="text" name="login" id="login" required>
             
            <label for="password">Hasło:</label>
            <input type="password" name="password" id="password" required>
            <input type="submit" value="ZALOGUJ" id="log-in">
            </form>
            <?php
                if (isset($_GET['err'])) {
                    if ($_GET['err'] == 1) {
                        echo "<p>Nieprawidłowe hasło</p>";
                    } if($_GET['err']==2){
                        echo "<p>Nieprawidłowy login</p>";
                    }}
            ?>
            </div>

        </div>
