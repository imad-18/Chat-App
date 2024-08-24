
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles/index.css?v=1.0" type="text/css">
    <title>Login</title>
</head>
<body>
    <form action="index_traitement.php" method="post">
        <label for="">Login</label>
        <input type="mail" name="login" required> <br><br>
        <label for="">password</label> 
        <input type="text" name="passe" required> <br><br>
        <a href="compte.php">Créer Compte ?</a> <br><br>
        <button type="submit" class="input-button">Login</button>
    </form>
</body>
</html>