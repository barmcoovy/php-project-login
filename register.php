<?php
    include('components/header.php');
?>
<link rel="stylesheet" href="styles/form.css">
<link rel="stylesheet" href="styles/header.css">
<link rel="stylesheet" href="styles/root.css">
<div id="form">
<form action="scripts/register_script.php" method="POST"> 
<label for="login">Login:</label>
<input type="text" name="login" id="login" required>
<label for="password">Hasło:</label>
<input type="password" name="password" id="password" required>
<label for="password2">Powtórz hasło:</label>
<input type="password" name="password2" id="password2" required>
<input type="submit" value="ZAREJESTRUJ" id="log-in">
<?php
    if (isset($_GET['err'])) {
        if ($_GET['err'] == 1) {
             echo "<p>Hasła nie są takie same</p>";
        } if($_GET['err']==2){
            echo "<p>Nazwa użytkownika jest zajęta</p>";
        }}
            ?>
</div>
        