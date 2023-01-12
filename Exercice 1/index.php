<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Informations sur l'utilisateur</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Information sur l'utilisateur</h1>
    <p>User Agent : <?php echo $_SERVER['HTTP_USER_AGENT']; ?></p>
    <p>Adress IP : <?php echo $_SERVER['REMOTE_ADDR']; ?></p>
    <p>Nom du serveur : <?php echo $_SERVER['SERVER_NAME']; ?></p>
</body>