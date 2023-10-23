<form method="get">
    Vardas: <input type="text" name='username'></br>
    Pavarde:<input type="text" name='password'></br>
    Komentaras:<textarea name="comment" form="usrform"></textarea></br>
    <button type="submit">Siusti</button>
</form>


<form method="post">
    El.Pastas:<input type="email" name='username'></br>
    Slaptazodis:<input type="password" name='password'></br>
    <button type="submit">Prisijungti</button>
</form>
<?php

if (isset($_POST['username']) && isset($_POST['password'])) {
    if ($_POST['username'] == 'martynas.jascemskas@gmail.com' && $_POST['password'] == 'marjas') {

    echo 'Prisijungei';
} else {
    echo 'Blogas slaptazodis';
}
 }
?>